<?php

namespace App\Http\Controllers;

use App\Models\AbstractSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AbstractSubmissionController extends Controller
{
    public function index() {

        $abstracts = AbstractSubmission::get();
        return view('dashboard.admin.abstracts.abstract', ['abstracts' => $abstracts]);
    }


    public function storeAbstract(Request $request)
    {
        $request->validate(
            [
                'full_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|max:14|min:8',
                'institution' => 'required',
                'country' => 'required',
                'abstract_type' => 'required',
                'title' => 'required|max:200',
                'file' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ]
        );

        //dd($request->all());
        $customId = 'A-' . str_pad(DB::table('abstract_submissions')->count() + 10001, 4, '0', STR_PAD_LEFT);
        
        $abstract = new AbstractSubmission();

        $abstract->abstract_id = $customId;

        $abstract->full_name = $request->full_name;
        $abstract->email = $request->email;
        $abstract->phone_number = $request->phone_number;
        $abstract->institution = $request->institution;
        $abstract->country = $request->country;
        $abstract->abstract_type = $request->abstract_type;
        $abstract->title = $request->title;

        $file = $request->file;

        if ($file) {
            $fileName = str_replace(' ', '_', $request->full_name) . '.' . $file->getClientOriginalExtension();
            $request->file->move('abstract', $fileName);

            $abstract->file = $fileName;
        }
        //dd($abstract);
        $abstract->save();
        Alert::success('Succesfully!', 'Abstract has been submited');
        return redirect('/submission/#submit');
        
    }
}
