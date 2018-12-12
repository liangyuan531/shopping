<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class CustomerManagementController extends Controller{
    
    // admin/vipmanagement  get
    // show page
    function index(){
        return view('admin/customer');
    }

    // admin/vipmanagement/create  get
    // adding page
    function create() {

    }

    // admin/vipmanagement post
    // add items
    function store() {

    }

    // admin/vipmanagement/{vipmanagement}  put
    function update() {

    }

    // admin/vipmanagement/{vipmanagement}/edit
    function edit() {

    }

    // admin/vipmanagement/{vipmanagement} delete
    function destroy() {

    }
}
