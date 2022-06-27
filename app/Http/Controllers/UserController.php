<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('pages.user.dashboard');
    }

    function profile(){
        return view('pages.user.profile');
    }

    function settings(){
        return view('pages.user.settings');
    }
}