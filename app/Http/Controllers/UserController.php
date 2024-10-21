<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function admin()
    {
        return view('admin.admin');
    }

    public function artikel()
    {
        return view('admin.artikel');
    }
}
