<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    function index(){
        echo 'home'; 
    }
}
