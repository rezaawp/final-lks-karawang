<?php

namespace App\Http\Controllers;

use App\Helpers\PollResult;
use App\Models\Choise;
use App\Models\Poll;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PollingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $polls = Poll::withCount(['choises', 'votes', 'votes as voted' => function (Builder $q) {
            return $q->where('user_id', Auth::user()->id);
        }])->orderBy('created_at', 'desc')->get();

        return view('polls', [
            'polls' => $polls
        ]);
    }

    public function create()
    {
        return view('admin.createpoll');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'deadline' => ['required', 'date']
        ]);

        if (count($request->choises) <= 1) {
            return redirect()->back()->withErrors(['choisesNull' => 'Pilihan polling harus minimal harus berisikan 2 pilihan']);
        }

        $pollStore = Poll::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'created_by' => Auth::user()->id,

        ]);

        foreach ($request->choises as $choise) {
            Choise::create([
                'choise' => $choise,
                'poll_id' => $pollStore->id
            ]);
        }
        return redirect()->back()->with('stored', 'Polling sudah berhasil dibuat');
    }


    public function show(string $id)
    {
        $poll = PollResult::user($id);
        return view('poll', [
            'poll' => $poll
        ]);
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
