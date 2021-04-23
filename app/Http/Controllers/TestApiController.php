<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestApiController extends Controller
{
    public static $url = 'http://localhost:3000/graphql';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStudents()
    {
      //
        $query = <<<QUERY
        query getStudents{
            students{
              data{
                id
                name
                age
                created_at
                updated_at
              }
            }
          }
        QUERY;
        //
        $response = Http::get(self::$url, [
            'query' => $query
        ]);
        $decoded = json_decode($response);
        $students = $decoded->data->students->data;
        foreach($students as $e){
            echo $e->id.' '.$e->name.'<br>';
        }
        // return $response->body();
    }

    public function createStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);
        $name = $request->name;
        $age = $request->age;
        $query = <<<QUERY
        mutation createStudent{
            createStudent(input:{
              name: $name,
              age: $age,
            }){
              id
              name
              age
              created_at
              updated_at
            }
          }
        QUERY;
        $response = Http::get(self::$url, [
            'query' => $query
        ]);
        // return $response->body();
        // return view('kontol');
        // return redirect();
    }
    public function updateStudent(Request $request, $id){
        $name = $request->name;
        $age = $request->age;
        $query = <<<QUERY
        mutation updateStudent{
            updateStudent(input:{
              id: $id,
              name: $name,
              age: $age,
            }){
              id
              name
              age
              created_at
              updated_at
            }
          }
        QUERY;
        $response = Http::get(self::$url, [
            'query' => $query
        ]);
    }
    public function deleteStudent($id){
        $query = <<<QUERY
        mutation deleteStudent{
            deleteStudent(
                id: $id
              ){
              id
              name
              age
              created_at
              updated_at
            }
          }
        QUERY;
        $response = Http::get(self::$url, [
            'query' => $query
        ]);
    }
}
