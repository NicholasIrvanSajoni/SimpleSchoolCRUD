<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        return Redirect::to('/students');
    }
    public function student_view()
    { 
        return view('pages/student_data');
    }

    // student view data list <-
    // teacher view data list fak i lupa ubah satu"
    // classroom view data list
    // create student
    // create teacher
    // create classroom
    // edit teacher
    // edit student
    // edit classroom
    
    
}
