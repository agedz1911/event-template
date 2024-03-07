<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function congressInfo()
    {
        return view('congressInfo');
    }

    public function scientificProgram()
    {
        return view('scientificProgram');
    }

    public function registration()
    {
        return view('registration');
    }

    public function submission()
    {
        return view('abstractSubmission');
    }
}
