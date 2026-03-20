<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/students.json');

       $students = collect(json_decode($json));

       $students->each(function($student){
            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'city_id' => $student->city_id
            ]);
       }); 
    }

}
