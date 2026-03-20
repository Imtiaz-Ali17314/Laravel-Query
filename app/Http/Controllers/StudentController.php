<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')
                ->join('cities' , 'students.city_id' , '=' , 'cities.id')
                ->select('students.id' ,'students.name' ,'students.email' , 'cities.city_name')
                ->orderBy('students.id' , 'asc')
                // ->where('cities.city_name' , '=' , 'Gilgit')
                ->paginate(5);
                

        // return $students;

        return view('studentList' , ['data' => $students]);
    }
}
