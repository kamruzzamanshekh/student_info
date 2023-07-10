<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function index()
    {
        return view('frontend.studentInfoView');
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
    }
}
