<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('indosurvei.dashboard');
    }

    public function action_survey(Request $request)
    {
        # code...
    }
}
