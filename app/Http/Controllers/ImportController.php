<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserEmployee;
use App\Models\School;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index(Request $request){
        $validated = $request->validate([
            'import_file' => 'required'
        ]);

        $datas =  Excel::toCollection(new EmployeeImport,$request->import_file);

        foreach($datas as $data){
            $rows = $data;
            foreach($rows as $row){
                if($row[4] != ''){
                   

                    $school = $row[14];
                    $school_res = School::where('name',$school)->first();
                    ($school_res != null) ? $school = $school_res->id : $school = 1;

                    $employee[] = [
                        'username' => $row[4],
                        'firstname' => $row[5],
                        'middlename' => $row[6],
                        'lastname' => $row[7],
                        'suffix' => '',
                        'email' => strtolower($row[4]).'@gmail.com',
                        'mobile' => '09123456789',
                        'gender' => 'Male',
                        'school' => $school,
                    ];
                }
            }
        }
        return $employee;
    }

    public function store(Request $request){
        set_time_limit(0);

        $result = \DB::transaction(function () use ($request){
            $employees = $request->users;
            $users = array();
            $success = array();
            $failed = array();
            $duplicate = array();

            foreach($employees as $employee){
                $count = User::where('username',$employee['username'])->count();
                if($count == 0){
                    $user = [ 
                        'email' => $employee['email'],
                        'username' => $employee['username'],
                        'avatar' => 'avatar.jpg',
                        'password' => bcrypt('eastwest'),
                        'role' => 'Teachers',
                        'created_at'	=> now(),
                        'updated_at'	=> now()
                    ];

                    \DB::beginTransaction();
                    $user_model = User::create($user);

                    if($user_model)
                    {                     
                        $profile_data = [
                            'user_id' => $user_model->id,
                            'firstname' => $employee['firstname'],
                            'middlename' => $employee['middlename'],
                            'lastname' => $employee['lastname'],
                            'gender' => $employee['gender'],
                            'mobile' => $employee['mobile'],
                            'created_at'	=> now(),
                            'updated_at'	=> now()
                        ];

                        $profile_model = UserProfile::insertOrIgnore($profile_data); 

                        if($profile_model){
                            $employee_data = [
                                'user_id' => $user_model->id,
                                'school_id' => $employee['school'],
                                'created_at'	=> now(),
                                'updated_at'	=> now()
                            ];

                            $employee_model = UserEmployee::insertOrIgnore($employee_data); 

                            if($employee_model){
                                array_push($success,$employee['username']);
                                \DB::commit();
                            }else{
                                array_push($failed,$employee['username']);
                                \DB::rollback();
                            }
    
                        }
                       
                    }else{
                        array_push($failed,$employee['username']);
                        \DB::rollback();
                    }
                }else{
                    array_push($duplicate,$employee['username']);
                }
            }

            $result = [
                'success' => $success,
                'failed' => $failed,
                'duplicate' => $duplicate,
            ];

            return $result;
        });
    }
}
