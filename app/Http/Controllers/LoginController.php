<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    //
    function index(){
        //loading view starts from views dir
        return view('login');
    }
}
