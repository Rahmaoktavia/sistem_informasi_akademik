<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users=User::latest();
        return view('akademik.user', [
            'users' => User::latest()->pencarian()->paginate(10)]);
    }
}
