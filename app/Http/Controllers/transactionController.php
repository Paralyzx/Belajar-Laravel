<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class transactionController extends Controller
{
    Public function index() 
    {    $transaction = transaction::all();
        //return $transaction;
       // dd($courts); 
        return view('mtransaction', compact('transaction'));
    } 
}
