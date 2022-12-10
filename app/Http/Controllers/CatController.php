<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    function show(){
        // echo "cat show";
        return view('admin.cat');
    }
    function insert(Request $req){
        $cat_name = $req->cat_name;
        $cat_peice = "100";
        return view('admin.cat', compact('cat_name'));
    }
}
