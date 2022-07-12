<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(\Auth::user()->role == 'Specialist'){
            return inertia('Home/Specialist/Index');
        }else if(\Auth::user()->role == 'Teacher'){
            return inertia('Home/Teacher/Index');
        }else{
            return inertia('Home/Index');
        }
    }
}
