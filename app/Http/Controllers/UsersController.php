<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    { 
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function makeAdmin( User $user)
    {
        $user->role = 'admin';
        session()->flash('success', 'Made admin successfully');
        return redirect(route('users'));
    }
}
