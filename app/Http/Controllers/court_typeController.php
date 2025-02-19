<?php

namespace App\Http\Controllers;
use App\Models\court_type;
use Illuminate\Http\Request;


class court_typeController extends Controller
{
    public function index(){
        $types = court_type::all();
        //return $types;
        //return view('mcourt_type');
        return view('mcourt_type', compact('types'));
    }

    public function store(){

    }
}
