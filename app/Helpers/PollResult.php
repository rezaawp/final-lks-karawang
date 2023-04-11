<?php

namespace App\Helpers;

use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\Poll;
use Illuminate\Support\Facades\Auth;

class PollResult
{
    static function user($id)
    {
        return Poll::where('id', $id)->withCount('votes')->with(['choises.votes' => function (Builder $q) use ($id) {
            $q->where('poll_id', $id);
        }])->withCount(['votes as voted' => function (Builder $q) {
            return $q->where('user_id', Auth::user()->id);
        }])->get()->map(function ($poll) {
            $poll->is_deadline = strtotime($poll['deadline']) <= strtotime(date('Y-m-d h:i:s')) ? true : false;
            collect($poll['choises'])->map(function ($choise) use ($poll) {
                $choise->votes_count = count($choise->votes);
                $choise->result_persentase = $poll['votes_count'] == 0 ? 0 : round($choise->votes_count / $poll['votes_count'] * 100);
                unset($choise->votes);
                return $choise;
            });
            return $poll;
        })->first();
    }

    static function tes($id)
    {
        return Poll::where('id', $id)->withCount('votes')->with(['choises.votes' => function (Builder $q) use ($id) {
            $q->where('poll_id', $id)->groupBy('division_id');
        }])->get();
        
        return Poll::where('id', $id)->withCount('votes')->with(['choises.votes' => function (Builder $q) use ($id) {
            $q->where('poll_id', $id)->groupBy('division_id');
        }])->withCount(['votes as voted' => function (Builder $q) {
            return $q->where('user_id', Auth::user()->id);
        }])->get()->map(function ($poll) {
            $poll->is_deadline = strtotime($poll['deadline']) <= strtotime(date('Y-m-d h:i:s')) ? true : false;
            collect($poll['choises'])->map(function ($choise) use ($poll) {
                $choise->votes_count = count($choise->votes);
                $choise->result_persentase = $poll['votes_count'] == 0 ? 0 : round($choise->votes_count / $poll['votes_count'] * 100);
                unset($choise->votes);
                return $choise;
            });
            return $poll;
        })->first();
    }

    static function admin($id)
    {
        return Poll::where('id', $id)->withCount('votes')->with(['choises.votes' => function (Builder $q) use ($id) {
            $q->where('poll_id', $id);
        }])->withCount(['votes as voted' => function (Builder $q) {
            return $q->where('user_id', Auth::user()->id);
        }])->get()->map(function ($poll) {
            $poll->is_deadline = strtotime($poll['deadline']) < strtotime(date('Y-m-d h:i:s')) ? true : false;
            collect($poll['choises'])->map(function ($choise) use ($poll) {
                $choise->votes_count = count($choise->votes);
                $choise->result_persentase = $poll['votes_count'] == 0 ? 0 : round($choise->votes_count / $poll['votes_count'] * 100);
                unset($choise->votes);
                return $choise;
            });
            return $poll;
        })->first();
    }
}
