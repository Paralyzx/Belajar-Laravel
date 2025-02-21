<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller

{
Public function index() 
{    $user = User::all();
    //return $user;
   // dd($courts); 
    return view('muser', compact('user'));
}
}
