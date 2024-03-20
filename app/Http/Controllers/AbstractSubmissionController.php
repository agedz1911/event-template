<?php

namespace App\Http\Controllers;

use App\Mail\AbstractSubmissionEmail;
use App\Models\AbstractSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class AbstractSubmissionController extends Controller
{
    public function index(Request $request) {

        $keyword = $request->keyword;
        $abstracts = AbstractSubmission::where('full_name', 'LIKE', '%' . $keyword . '%')->paginate(8);
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
                'title' => 'required|max:350',
                'file' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ]
        );

        //dd($request->all());
        $customId = 'A-' . str_pad(DB::table('abstract_submissions')->count() + 0001, 4, '0', STR_PAD_LEFT);
        
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
        $data = [
            'full_name' => $abstract->full_name,
            'title' => $abstract->title,
            'abstract_id' => $abstract->abstract_id,
            'url' => url('/dashboard/admin/abstracts/' . $abstract->abstract_id),
        ];
        Mail::to($abstract->email)->send(new AbstractSubmissionEmail($data));

        Alert::success('Succesfully!', 'Abstract has been submited');
        return redirect('/submission/#submit');
        //->with('success', 'abstract has been submitted');
        
    }
}
