<?php

namespace App\Http\Controllers;

// use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // $this->data['users'] = User::all();
        return view('users.users', $this->data);
    }
}
