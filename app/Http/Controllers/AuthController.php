<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $req)
    {
        $validate = $req->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validate)) {
            if (Auth::user()->change_password == false) {
                return redirect('/update-password');
            }
            return redirect('/polls');
        } else {
            return redirect()->back()->withErrors(['loginFailed' => 'Username atau password yang anda masukan salah']);
        }
    }

    function changePassword(Request $request)
    {
        $checkPassword = Hash::check($request->old_password, Auth::user()->password); // true / false

        // if $checkPassword
        $validasi = $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required'],
            'confirmation_password' => ['required', 'same:new_password'],
        ]);

        if ($checkPassword === false) {
            return redirect()->back()->withErrors([
                'wrongPassword' => 'Password yang anda masukan salah'
            ]);
        }

        $user = User::where('id', Auth::user()->id)->first();
        $updateUser = $user->update([
            'password' => bcrypt($request->new_password),
            'change_password' => 1
        ]);
        if ($updateUser) {
            Auth::logout();
            return redirect('/login')->with('passwordChange', 'Password kamu baru saja di ubah. Silahkan login kembali');
        }
        return redirect()->back();
    }

    // Untuk admin
    function register()
    {
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    function panduanAkun()
    {
        $data['admins'] = User::where('role', 'admin')->get();
        return view('panduandaftar', $data);
    }
}
