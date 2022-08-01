<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use App\Models\User;
use App\Models\UserTarget;
use App\Models\UserEngagement;
use App\Models\Teacher;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\TeacherResource;
use App\Http\Resources\UserResource;


class TeacherController extends Controller
{
    public function index(Request $request)
    {   
        $municipality_code = \Auth::user()->profile->team->assignments;
        $municipality_code = $municipality_code[0]['municipality_code'];

        $data = TeacherResource::collection(
            Teacher::query()
            ->with('school')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
                ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
            })
            ->whereHas('school',function ($query) use ($municipality_code) {
                $query->where('municipality_code',$municipality_code);
            })
            ->when($request->school, function ($query, $school) {
                $query->whereHas('school',function ($query) use ($school) {
                    $query->where('id',$school);
                });
            })
            ->orderBy('lastname','DESC')
            ->paginate($request->count)
            ->withQueryString()
        );

        if($request->search){
            return $data;
        }else{
            $schools = School::where('municipality_code',$municipality_code)->get();
            return inertia('Modules/Teachers/Index',[
                'schools' => $schools
            ]);
        }
    }

    public function show($data = null){
        return inertia('Modules/Teachers/Import');
    }

    public function store(UserRequest $request)
    { 

    }

    public function send(Request $request){
    
        $email = $request->email;
        $name = $request->name;
        $message = 'test';
        $title = 'Application Form';
        
        $hashids = new Hashids('wew',10);
        $code1 = $hashids->encode($request->id);
        $code2 = $hashids->encode(\Auth::user()->id);
        $link = 'http://eastwest.local/form/'.$code1.'/'.$code2;

        // $data = array("name" => $name, "body" => $message);
        // Mail::send("views.form", $data, function($message) use ($name, $body) {
        //     $message->to($email, $name)->subject("EastWest : ".$title);
        //     $message->from("eastwest@bank.com","EastWest");
        // });

        $data = array("name" => $name, "body" => $link);
        Mail::send("form", $data, function($message) use ($name, $email,$title) {
            $message->to($email, $name)->subject("EastWest Notification : ".$title);
            $message->from("eastwest@bank.com","EastWest");
        });
    }

    public function form($code1,$code2){

      
        $hashids = new Hashids('wew',10);
        $code11 = $hashids->decode($code1);
        $code22 = $hashids->decode($code2);
        
        $specialist = new UserResource(User::with('profile')->where('id',$code22)->first());
        $teacher = new TeacherResource(Teacher::with('school')->where('id',$code11)->first());

   
        return inertia('Modules/Teachers/Form',[
            'specialist' => $specialist,
            'teacher' => $teacher
        ]);
    }

    public function avail(Request $request){
        $user_id = $request->user_id;
        $teacher_id = $request->teacher_id;
        $month = date("Y").'-'.date("m").'-1';

        $target = UserTarget::where('user_id',$user_id)->where('month',$month)->first();

        $data = new UserEngagement;
        $data->teacher_id = $teacher_id;
        $data->user_id = $user_id;
        $data->target_id = $target->id;
        $data->save();
    }

    public function api($id,$school = null){
        $user = User::where('id',$id)->first();
        $municipality_code = $user->profile->team->assignments;
        $municipality_code = $municipality_code[0]['municipality_code'];

        $data = TeacherResource::collection(
            Teacher::query()
            ->with('school')
            // ->when($request->keyword, function ($query, $keyword) {
            //     $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', "%{$keyword}%")
            //     ->orWhere(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', "%{$keyword}%");
            // })
            ->whereHas('school',function ($query) use ($municipality_code) {
                $query->where('municipality_code',$municipality_code);
            })
            ->when($school, function ($query, $school) {
                $query->whereHas('school',function ($query) use ($school) {
                    $query->where('id',$school);
                });
            })
            ->orderBy('lastname','DESC')
            ->paginate(10)
            ->withQueryString()
        );

        return $data;
    }
}
