<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        $first = $request->input('firstname');
        $last = $request->input('lastname');
        $nama = $first .' '. $last;
        return view('welcome', ['nama' => $nama]);
    }
}
