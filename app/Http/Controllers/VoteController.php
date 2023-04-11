<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    function store(Request $request)
    {
        $request->validate(['choise' => ['required']]);

        Vote::create([
            'choise_id' => (int)$request->choise,
            'poll_id' => (int)$request->poll_id,
            'division_id' => Auth::user()->division_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back()->with('voted', 'Voting berhasil !');
    }
}
