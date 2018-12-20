<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// import Controller
use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewVip;

class OrdersController extends Controller{
    
    // admin/orders  get
    // show page
    function index(){
        // $vips = \DB::table('user')->paginate(5);
        // return view('admin.vip')->with('vips', $vips);
        return view('admin.orders');
    }

    // admin/orders/create  get
    // adding page
    function create() {
        
    }

    // admin/orders post
    // add items
    function store(/*AddNewVip $request*/) {
        
    }

    // admin/orders/{orders}  put
    function update() {

    }

    // admin/orders/{orders}/edit
    function edit($id) {
        
    }

    // admin/orders/{orders} delete
    function destroy($id) {
        
    }
}
