<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function daftar (){
        return view('register');
    }
    
    public function store(Request $request){
        $name = $request->input('depan');
        $Name = $request->input('belakang');
    
        return view('welcome' , ['name' => $name, 'Name' => $Name ]);
    }
}
