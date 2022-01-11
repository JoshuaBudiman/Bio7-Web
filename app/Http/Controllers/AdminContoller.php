<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContoller extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.home', compact('user'));
    }
}
