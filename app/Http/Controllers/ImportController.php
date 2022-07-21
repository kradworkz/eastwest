<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
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
                if($row[3] != ''){
                    $employee[] = [
                        'code' => $row[3],
                        'firstname' => $row[4],
                        'middlename' => $row[5],
                        'lastname' => $row[6],
                        'suffix' => '',
                        'email' => strtolower($row[3]).'@gmail.com',
                        'mobile' => '09123456789',
                        'gender' => 'Male'
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
                $count = Teacher::where('code',$employee['code'])->count();
                if($count == 0){
                    $user = [ 
                        'code' => $employee['code'],
                        'firstname' => $employee['firstname'],
                        'middlename' => $employee['middlename'],
                        'lastname' => $employee['lastname'],
                        'suffix' => $employee['suffix'],
                        'email' => $employee['email'],
                        'gender' => $employee['gender'],
                        'mobile' => $employee['mobile'],
                        'school_id' => rand(1,6),
                        'created_at'	=> now(),
                        'updated_at'	=> now()
                    ];

                    \DB::beginTransaction();
                    $user_model = Teacher::create($user);

                    if($user_model){
                        array_push($success,$employee['code']);
                        \DB::commit();
                    }else{
                        array_push($failed,$employee['code']);
                        \DB::rollback();
                    }
                    
                }else{
                    array_push($duplicate,$employee['code']);
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
