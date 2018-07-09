<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function index(){

        $users=User::all();

        return view('table',compact('users'));
    }

}
