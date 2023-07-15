<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Requests\CreateStudentRequest;
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
    public function store(CreateStudentRequest $request)
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
    return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student=Student::find($id);
        return view('frontend.studentView',
        compact('student')
    );

    } public function edit($id)
    {
        $student=Student::find($id);
        return view('frontend.editStudentView',
        compact('student')
    );
    }
    public function update($id, UpdateStudentRequest $request)
    {
        $student=Student::find($id);
        $student->update([
            'first_name'=>$request->fname,
            'last_name'=>$request->lname,
            'email'=>$request->email,
            'phone'=> $request->phone
        ]);
        return redirect()->route('student.index')->with(['message'=>'Update Successful']);
    }
    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('student.index')->with(['message'=>'Successfully deleted Record']);

    }
}
