<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function storeLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Success', 'Login successful');
            return redirect()->intended('dashboard/admin');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Logout successful');
        return redirect('/');
    }

    public function userRegister()
    {
        $roles = Role::where('name', '!=', 'superadmin')->get();
        $users =  User::get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.users.register', compact('users', 'roles'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;

        $user->save();
        Alert::success('Succesfully!', 'User has been created');
        return redirect()->back();
    }

    public function role()
    {
        $roles = Role::all();
        $deleted_role = Role::onlyTrashed()->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.users.role', compact('roles', 'deleted_role'));
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = new Role();
        $data->create($request->all());
        Alert::success('Succesfully!', 'Role has been created');
        return redirect()->back();
    }
    public function delete_role($id)
    {
        $date = Role::find($id);
        $date->delete();
        Alert::success('Succesfully!', 'Role has been deleted');
        return redirect()->back();
    }
    public function restore_role($id)
    {
        Role::withTrashed()->where('id', $id)->restore();
        Alert::success('Succesfully!', 'Role has been restored');
        return redirect()->back();
    }
}
