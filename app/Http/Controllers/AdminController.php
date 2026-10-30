<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function signin()
    {
        return view('admin.signin');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function sweetalert()
    {
        return view('admin.sweetalert');
    }

    public function datatables()
    {
        return view('admin.datatables');
    }
}
