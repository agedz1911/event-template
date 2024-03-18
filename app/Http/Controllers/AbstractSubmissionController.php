<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbstractSubmissionController extends Controller
{
    public function storeAbstract(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        dd($request->all());
    }
}
