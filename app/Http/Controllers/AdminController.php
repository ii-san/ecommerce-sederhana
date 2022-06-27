<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('pages.admin.dashboard');
    }

    function profile(){
        return view('pages.admin.profile');
    }

    function settings(){
        return view('pages.admin.settings');
    }
}
