<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function classroom_view()
    {
        return view('pages/classroom_data');
    }
}
