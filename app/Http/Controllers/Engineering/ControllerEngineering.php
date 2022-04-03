<?php

namespace App\Http\Controllers\Engineering;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerEngineering extends Controller
{
    public function register(){

        return view('Engineering.register');
    }

    public function login(){

        return view('Engineering.login');
    }

    public function index(){

        return view('Engineering.index');
    }
}
