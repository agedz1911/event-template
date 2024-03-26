<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationDashboardController extends Controller
{
    public function index() 
    {
        return view('dashboard.admin.registrations.ProductRegistration');
    }
}
