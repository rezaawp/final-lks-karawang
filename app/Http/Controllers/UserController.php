<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $data['divisions'] = Division::all();
        return view('admin.createuser', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required'],
            'konfirmasi_password' => ['required', 'same:password'],
            'divisi' => ['required']
        ]);

        $divisiId = (int)$request['divisi'];

        $userStore = User::create([
            'name' => $request['nama_lengkap'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'division_id' => $divisiId,
        ]);

        if ($userStore) {
            return redirect()->back()->withErrors(['stored' => 'Berhasil mendaftarkan user']);
        }

        return redirect()->back()->withErrors(['stored' => 'Gagal mendaftarkan user']);

    }
}
