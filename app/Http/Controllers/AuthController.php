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

    public function signup()
    {
        return view('signup');
    }

    public function signUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        //dd($request->all());

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            Alert::error('Error!', 'A user with this email address already exists.');
            return redirect()->back();
            // ->with('error', 'A user with this email address already exists.');
        }
        $role_id = '3';
        User::firstOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role_id' => $role_id
        ]);
        Alert::success('Succesfully!', 'User has been created');
        return redirect('/login');
        // ->with('success', 'User has been created');
    }

    public function storeLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     Alert::success('Success', 'Login successful');
        //     return redirect()->intended('dashboard/admin');
        // }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role_id == 3) {
                Alert::success('Success', 'Login successful');
                return redirect()->intended('dashboard/user');
            } else {
                Alert::success('Success', 'Login successful');
                return redirect()->intended('dashboard/admin');
            }
        }
        Alert::error('error', 'Invalid email or password');
        return back();
        // ->with('error', 'Invalid email or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Logout successful');
        return redirect('/');
    }

    public function userRegister(Request $request)
    {
        $keyword = $request->keyword;

        $roles = Role::where('name', '!=', 'superadmin')->get();
        $users =  User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(20);
        $deleted_user = User::onlyTrashed()->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.admin.users.register', compact('users', 'roles', 'deleted_user'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            Alert::error('Error!', 'A user with this email address already exists.');
            return redirect()->back();
        }

        $user = User::firstOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->role_id = $request->role_id;

        // $user->save();
        Alert::success('Succesfully!', 'User has been created');
        return redirect()->back();
    }

    public function delete_user($id)
    {
        $data = User::find($id);
        $data->delete();
        Alert::success('Succesfully!', 'Role has been deleted');
        return redirect()->back();
    }
    public function restore_user($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        Alert::success('Succesfully!', 'Role has been restored');
        return redirect()->back();
    }

    public function edit_user($id)
    {
        $users = User::with('roles')->findOrFail($id);
        $roles = Role::where('id', '!=', $users->role_id)->where('name', '!=', 'superadmin')->get();
        return view('dashboard.admin.users.editUser', compact('users', 'roles'));
    }

    public function update_user(Request $request, $id)
    {
        $users = User::findOrFail($id);
        // dd($users);
        $users->update($request->all());
        Alert::success('Succesfully!', 'User has been updated');
        return redirect()->to('/dashboard/admin/user-register');
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
