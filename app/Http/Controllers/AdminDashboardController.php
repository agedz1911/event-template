<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.home');
    }

    public function userRegister()
    {
        return view('dashboard.admin.users.register');
    }

    public function role()
    {
        return view('dashboard.admin.users.role');
    }

    public function importantDates()
    {
        return view('dashboard.admin.pages.importantDates');
    }

    public function faculties()
    {
        return view('dashboard.admin.pages.faculties');
    }
}
