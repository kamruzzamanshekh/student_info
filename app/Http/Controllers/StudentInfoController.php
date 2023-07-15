<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentInfoController extends Controller
{
    public function index()
    {
        $student=Student::all();
        return view('frontend.studentInfoView',[
            'students'=>$student,
        ]);
    }
    public function create()
    {
        return view('backend.createStudentInfo');
    }
    public function store(Request $request)
    {
    //  dd($request->fname);
    //  Person::create([
    //  'first_name'=> $request->fname,
    //  'last_name'=> $request->lname,
    //  'phone'=> $request->phone,
    //  ]);
    Student::create([
        'first_name' => $request->fname,
        'last_name' => $request->lname,
        'email' => $request->email,
        'phone' => $request->phone,
    ]);
    }

    public function show($id)
    {
        $student=Student::find($id);
        return view('frontend.studentView',
        compact('student')
    );

    }
}
