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
    public function student_view(Request $request)
    { 
        $response = Http::get('http://127.0.0.1:3000/api/students');
        return view('pages/student_data')
        ->with('students', $response->json());
    }

    public function create_student(Request $request)
    {

    }
    // student view data list 
    // teacher view data list 
    // classroom view data list
    // create student
    // create teacher
    // create classroom
    // edit teacher
    // edit student
    // edit classroom
    
    
}
