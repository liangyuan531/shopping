<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class VipManagementController extends Controller{
    
    // admin/vipmanagement  get
    // show page
    function index(){
        return view('admin/vip');
    }

    // admin/vipmanagement/create  get
    // adding page
    function create() {
        return view('admin/add');
    }

    // admin/vipmanagement post
    // add items
    function store(Request $request) {
        // parse string to array
        parse_str($_POST['str'], $arr);
        $arrInsert['username'] = $arr['username'];
        $arrInsert['password'] = $arr['password'];
        $arrInsert['time'] = time();
        $arrInsert['isVip'] = '1';
        $arrInsert['aid'] = 1;

        if(\DB::table('user')->insert($arrInsert)) {
            echo "1";
        } else {
            echo "0";
        }
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
