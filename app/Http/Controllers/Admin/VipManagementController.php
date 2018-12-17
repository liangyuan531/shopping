<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;

class VipManagementController extends Controller{
    
    // admin/vipmanagement  get
    // show page
    function index(){
        $vips = \DB::table('user')->paginate(10);
        return view('admin.vip')->with('vips', $vips);
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
        $rules = [
            'username' => 'required|unique:user|between:5,20',
            'password' => 'required|between:6,20',
            'repassword' => 'required|same:password',
            'email' => 'required|email'
        ];
        $message = [
            "username.required" => "username is required",
            "username.unique" => "user exists",
            "username.between" => "the length of username must be between 5 and 20",
            "password.required" => "please input password",
            "password.between" => "the length of password must be between 6 and 20",
            "repassword.same" => "passwords are inconsistent",
            "repassword.required" => "please input password again",
            "email.email" => "invalid email address",
            "email.required" => "please input email"
        ];

        $validator = \Validator::make($arr, $rules, $message);
        if($validator->passes()) {
            $arrInsert['username'] = $arr['username'];
            $arrInsert['password'] = $arr['password'];
            $arrInsert['time'] = time();
            $arrInsert['isVip'] = '1';
            $arrInsert['aid'] = 1;
            if(\DB::table('user')->insert($arrInsert)) {
                return 1;
            } else {
                return 0;
            }
        }else {
            return $validator->getMessageBag()->getMessages();
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
