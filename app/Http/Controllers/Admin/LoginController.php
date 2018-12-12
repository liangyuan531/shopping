<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class LoginController extends Controller{
    //
    function index(){
        //loading view starts from views dir
        return view('admin/login'); // or admin.index
    }
}
