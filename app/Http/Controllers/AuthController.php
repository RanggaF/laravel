<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function submit(request $request){
        $nama = $request['name'];
        return view ('home', compact('nama'));
    }
}
