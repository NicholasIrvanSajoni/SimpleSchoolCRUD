<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeacherController extends Controller
{
    
    public function teacher_view(Request $request)
    {
        $response = Http::get('http://127.0.0.1:3000/api/teachers');
        return view('pages/teacher_data')
        ->with('teachers', $response->json());
    }
}