<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function teacher_view()
    {
        return view('pages/teacher_data');
    }
}