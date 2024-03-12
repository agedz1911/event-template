<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\ImportantDate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function importantDates(Request $request)
    {
        $keyword = $request->keyword;
        //dd($keyword);
        $important_dates = ImportantDate::where('title', 'LIKE', '%' . $keyword . '%')->paginate(20);
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.pages.importantDates', ['important_dates' => $important_dates]);
    }

    public function storeImportantDates(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
        $data = new ImportantDate();
        $data->create($request->all());
        Alert::success('Succesfully!', 'Important Date has been created');
        return redirect()->back();
    }

    public function delete_importantDate($id)
    {
        $date = ImportantDate::find($id);
        $date->delete();
        Alert::success('Succesfully!', 'Important Date has been deleted');
        return redirect()->back();
    }

    public function faculties()
    {
        $countries = countries();
        $faculties = Faculty::paginate(15);
        return view('dashboard.admin.pages.faculties', compact('countries', 'faculties'));
    }

    public function storeFaculties(Request $request)
    {
        //dd($request->all());
        $faculty = new Faculty();

        $faculty->name = $request->name;
        $faculty->country = $request->country;

        $image = $request->image;

        if ($image) {
            $imageName = $request->name . '.' . $image->getClientOriginalExtension();
            $request->image->move('images/faculty', $imageName);

            $faculty->image = $imageName;
        }

        $faculty->save();
        Alert::success('Done!', 'Faculty Created Success');
        return redirect()->back();
    }
}
