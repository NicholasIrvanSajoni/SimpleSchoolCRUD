<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClassroomController extends Controller
{
    public function classroom_view(Request $request)
    {
        $response = Http::get('http://127.0.0.1:3000/api/classrooms');
        return view('pages/classroom_data')
        ->with('classrooms', $response->json());
    }
}
