<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\ImportantDate;
use App\Models\Schedule;
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
        $deleted_dates = ImportantDate::onlyTrashed()->get();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.pages.importantDates', ['important_dates' => $important_dates, 'deleted_dates' => $deleted_dates]);
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

    public function restore_importantDate($id)
    {
        ImportantDate::withTrashed()->where('id', $id)->restore();
        Alert::success('Succesfully!', 'Important Date has been restored');
        return redirect()->back();
    }

    public function edit_importantDate($id)
    {
        $important_dates = ImportantDate::findOrFail($id);
        return view('dashboard.admin.pages.editImportantDates', ['important_dates' => $important_dates]);
        
    }
    public function update_importantDate(Request $request, $id)
    {
        $data = ImportantDate::findOrFail($id);
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();
        Alert::success('Succesfully!', 'Important Date has been updated');
        return redirect()->to('/dashboard/admin/important-dates');
    }

    public function faculties(Request $request)
    {
        $keyword = $request->keyword;
        $countries = countries();
        $faculties = Faculty::where('name', 'LIKE', '%' . $keyword . '%')->with('schedule')->paginate(15);
        $deleted_faculty = Faculty::onlyTrashed()->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.pages.faculties', compact('countries', 'faculties', 'deleted_faculty'));
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
            $request->image->move('assets/images/faculty', $imageName);

            $faculty->image = $imageName;
        }

        $faculty->save();
        Alert::success('Done!', 'Faculty Created Success');
        return redirect()->back();
    }

    public function delete_faculty($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
        Alert::success('Succesfully!', 'Important Date has been deleted');
        return redirect()->back();
    }

    public function restore_faculty($id)
    {
        Faculty::withTrashed()->where('id', $id)->restore();
        Alert::success('Succesfully!', 'Important Date has been restored');
        return redirect()->back();
    }

    public function edit_faculties($id)
    {
        $countries = countries();
        $faculties = Faculty::findOrFail($id);
        return view('dashboard.admin.pages.editFaculty', ['faculties' => $faculties, 'countries' => $countries]);
        
    }
    public function update_faculties(Request $request, $id)
    {
        $data = Faculty::findOrFail($id);
        $data->name = $request->name;
        $data->country = $request->country;

        $image = $request->image;

        if ($image) {
            $imageName = $request->name . '.' . $image->getClientOriginalExtension();
            $request->image->move('assets/images/faculty', $imageName);

            $data->image = $imageName;
        }

        $data->save();
        Alert::success('Succesfully!', 'Faculty has been updated');
        return redirect()->to('/dashboard/admin/faculties');
    }

    public function schedules()
    {
        $faculties = Faculty::all();
        $schedules = Schedule::with('faculty')->paginate(10);
        $del_schedules = Schedule::onlyTrashed()->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.pages.schedule', ['faculties' => $faculties, 'schedules' => $schedules, 'del_schedules' => $del_schedules]);
    }

    public function storeSchedule(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'title' => 'required',
            'room' => 'required',
            'faculty_id' => 'required',
        ]);
        // dd($request->all());
        $schedule = new Schedule();
        $schedule->create($request->all());
        // $schedule->date = $request->date;
        Alert::success('Succesfully!', 'Schedule has been created');
        return redirect()->back();
    }

    public function delete_schedule($id)
    {
        $schedules = Schedule::findOrFail($id);
        $schedules->delete();
        Alert::success('Succesfully!', 'Schedule has been deleted');
        return redirect()->back();
    }

    public function restore_schedule($id)
    {
        Schedule::withTrashed()->where('id', $id)->restore();
        Alert::success('Succesfully!', 'Schedule has been restored');
        return redirect()->back();
    }
}
