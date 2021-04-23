<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    static $url = 'http://127.0.0.1:4000/api';
    public function index(){
        $id = '2';
        $response = Http::get(self::$url."/students/$id");
        return view('pages/student_data')
        ->with('student', $response->json());
    }
    public function create(){
        return view('pages/create_data');//sembarang doang
    }
    public function store(Request $request){
        $response = Http::post(self::$url."/students", [
            'name' => $request->name,
            'age' => $request->age,
        ]);
    }
}
