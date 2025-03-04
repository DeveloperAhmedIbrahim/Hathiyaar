<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function switchTheme($mode)
    {
        if($mode === "light")
        {
            Session::put('themeMode', "light");
        }
        if($mode === "dark")
        {
            Session::put('themeMode', "dark");
        }
        return redirect()->back();
    }
}
