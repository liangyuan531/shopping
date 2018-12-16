<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Single Action Controller
class LoginController extends Controller{
    // only one action
    function __invoke(){
        //loading view starts from views dir
        return view('login');
    }
}
