<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index()
    {
        return view('userinfo', ['user' => auth()->user()]);
    }
}
