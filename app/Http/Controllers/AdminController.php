<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();

        return view('admin', ['users' => $users]);
    }
}
