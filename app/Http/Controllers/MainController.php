<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\ImportantDate;
use App\Models\ProductRegistration;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $important_dates = ImportantDate::all();
        return view('home', ['important_dates' => $important_dates]);
    }

    public function congressInfo()
    {
        $localfaculties = Faculty::where('country', 'indonesia')->get();
        $intfaculties = Faculty::where('country', '!=', 'indonesia')->get();
        return view('congressInfo', ['localfaculties' => $localfaculties, 'intfaculties' => $intfaculties]);
    }

    public function scientificProgram()
    {
        return view('scientificProgram');
    }

    public function submission()
    {
        $countries = countries();
        return view('abstractSubmission', ['countries' => $countries]);
    }
}
