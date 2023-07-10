<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function index()
    {
        return view('frontend\studentInfoView');
    }
}
