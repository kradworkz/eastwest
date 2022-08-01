<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\UserEmployee;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\Api\TeacherResource;

class SchoolController extends Controller
{   
    public function lists(){
        $data = DefaultResource::collection(
            School::query()
            ->orderBy('created_at','DESC')
            ->paginate(2)
            ->withQueryString()
        );

        return $data;
    }

    public function teachers($id){
        $data = UserEmployee::query()
            ->with('user.profile','school')
            ->where('school_id',$id)
            ->orderBy('id','DESC')
            ->paginate(2)
            ->withQueryString();

        return TeacherResource::collection($data);
    }

    public function index(Request $request)
    {
        if($request->search){

            $data = DefaultResource::collection(
                School::query()
                ->when($request->keyword, function ($query, $keyword) {
                    $query->where('name', 'LIKE', "%{$keyword}%");
                })
                ->orderBy('created_at','DESC')
                ->paginate($request->count)
                ->withQueryString()
            );

            return $data;
        }else{
            return inertia('Modules/Schools/Index');
        }
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            $code = $this->allotment();
            $data = School::create($request->all());
            return $data;
        });

        return back()->with([
            'message' => 'School added successfully. Thanks',
            'data' => new DefaultResource($q),
            'type' => 'bxs-check-circle'
        ]); 
    }

    
    public function api(){
        $id = \Auth::user()->id;
        $user = User::where('id',$id)->first();
        $municipality_code = $user->profile->team->assignments;
        $municipality_code = $municipality_code[0]['municipality_code'];

        $schools = School::where('municipality_code',$municipality_code)->get();
        return $schools;
    }
}
