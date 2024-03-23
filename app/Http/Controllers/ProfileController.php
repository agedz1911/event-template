<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $countries = countries();
        $user = Auth::user();
        $biodata = $user ? $user->biodata : null;
        return view('dashboard.profile.home', ['biodata' => $biodata, 'countries' => $countries]);
    }

    public function storeProfile(Request $request)
    {
        //dd($request->all());
        $user = Auth::user();
        if (Biodata::count() == 0) {
            $biodata = Biodata::create($request->all());
            $user->biodata_id = $biodata->id;
        } else {
            $biodata = $user->biodata;
            $biodata->update($request->all());
        }
        //dd($biodata);
        $biodata->save();
        Alert::success('Successfully', 'Profile has created');
        return redirect()->back();
    }
}
