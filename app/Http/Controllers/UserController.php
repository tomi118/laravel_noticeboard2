<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUser($user_id)
    {
        $user = User::where('id', $user_id)->first();
        return view('user.profile', ['user' => $user]);
    }
}
