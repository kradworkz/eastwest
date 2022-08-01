<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use App\Models\UserProfile;
use App\Models\UserTarget;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\TeacherResource;
use App\Jobs\EmailNewAccount;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        $data = UserResource::collection(
            User::query()
            ->with('profile')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
                    ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
                })->orWhere(function ($query) use ($keyword) {
                    $query->where('email', 'LIKE', "%{$keyword}%");
                });
            })
            ->whereHas('profile',function ($query){
                $query->orderBy('lastname','DESC');
            })
            ->where('role',$request->type)
            ->paginate($request->count)
            ->withQueryString()
        );

        if($request->search){
            return $data;
        }else{
            return inertia('Modules/User/Index');
        }
    }

    public function store(UserRequest $request)
    { 
        $data = \DB::transaction(function () use ($request){
            $data = User::new($request->all());
            return new UserResource($data);
        });

        return back()->with([
            'message' => 'User created successfully. Thanks',
            'data' => $data,
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function update(UserRequest $request)
    {   
        $data = \DB::transaction(function () use ($request){
            if($request->editable === 'verify'){
                if(EmailNewAccount::dispatch($request->id)->delay(now()->addSeconds(10))){
                    return [
                        'data' => '',
                        'message' => 'User verification successfully send. Thanks',
                        'type' => 'bx-mail-send'
                    ];
                }
            }else{
                $data = User::findOrFail($request->id);
                $data->update($request->except('img','editable'));
                $profile = UserProfile::where('user_id',$request->id)->first();
                $profile->update($request->except('email','role','is_active','img','editable'));
                ($request->img != '') ? $data = $data->image($request->all()) : '';
                $data = User::with('profile')->with('employee.school.municipality.province.region')->with('specialist.municipality.province.region')->where('id',$request->id)->first();
                return [
                    'data' => $data,
                    'message' => $request->role.' updated successfully. Thanks',
                    'type' => 'bxs-check-circle'
                ];
            }
        });
        
        if($request->editable){
            return back()->with([
                'message' => $data['message'],
                'data' => ($data['data'] != '') ? new UserResource($data['data']) : '',
                'type' => $data['type']
            ]);
        }else{
            return new UserResource($data['data']);
        }
    }

    public function show($type){
        return inertia('Teachers/Import');
    }

    public function edit($type,Request $request){
        if($type == 'roles'){
            $this->roles($request);
        }else{
            $this->groups($request);
        }
    }

    public function targets(Request $request)
    {           
        $month = date("Y").'-'.date("m").'-1';

        $count = UserTarget::where('month',$month)->where('user_id',$request->id)->count();

        if($count == 0){
            $data = User::findOrFail($request->id);
            $data->targets()->create(array_merge($request->all(),['added_by' => \Auth::user()->id, 'month' => $month]));

            return back()->with([
                'message' => 'Target successfully set. Thanks',
                'data' => $data,
                'type' => 'bxs-check-circle'
            ]); 
        }else{
            return back()->with([
                'message' => 'Target already set for this month',
                'data' => '',
                'type' => 'bxs-x-circle'
            ]); 
        }
    }
}
