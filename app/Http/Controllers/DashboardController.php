<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if (Auth::user()->hasRole('user')) {

            return view('dashboard.user');

        } else if (Auth::user()->hasRole('administrator')) {

            return view('dashboard.admin');

        } else if (Auth::user()->hasRole('superadministrator')) {

            return view('dashboard.super-admin');

        }

    }

    public function myProfile()
    {
        return view('dashboard.profile.user');
    }

}
