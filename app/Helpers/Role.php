<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Role
{
    static function admin()
    {
        if (Auth::user()->role == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    static function user()
    {
        if (Auth::user()->role == 'user') {
            return true;
        } else {
            return false;
        }
    }
}
