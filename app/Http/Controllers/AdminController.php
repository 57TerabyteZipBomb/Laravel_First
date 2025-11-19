<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view("admin.home-admin");
    }

    public function test(){
        return view("admin.test-admin");
    }
}
