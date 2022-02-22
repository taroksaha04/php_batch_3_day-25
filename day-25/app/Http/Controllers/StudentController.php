<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    protected $city;
    protected $students;
    public function index()
    {
//        $this->name = 'BITM';
//        $this->city = 'Dhaka';
        //compact
//        $data = 'BITM';
//        $tarok = 'Dhaka';

//        using array data sharing
//        return view('all',['data' => $this->name]);


        // using with data share
        //return view('all')->with('data',$this->name);
//        return view('all')->with(
//            [
//                'data' =>$this->name,
//                'tarok'=>$this->city
//
//            ]);

        //using compact
//        return view('all',compact('data','tarok'));


//        return view('all',[
//            'data' =>$this->name,
//            'tarok'=>$this->city
//
//        ]);



        //for model(model theke data ene view te print kortechi)
//        $this->students = Student::getAllStudent();
//        return view('all',['students' => $this->students]);


        //for database
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';
    }
}
