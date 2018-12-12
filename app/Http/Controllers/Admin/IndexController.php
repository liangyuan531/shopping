<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    //
    function index(){
        //loading view starts from views dir
        return view('admin/index'); // or admin.index
    }
}
