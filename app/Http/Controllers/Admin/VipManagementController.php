<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class VipManagementController extends Controller{
    
    //admin/vipmanagement  get
    function index(){
        return view('admin/vip');
    }
}
