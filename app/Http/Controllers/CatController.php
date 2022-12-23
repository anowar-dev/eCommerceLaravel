<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class CatController extends Controller
{
    //
    function show(){
        $cat_model = new CatModel();
        $allData = $cat_model->get();
        return view('admin.cat', ["data"=> $allData]);
    }
    function insert(Request $req){
        $cat_name = $req->cat_name;
        $cat_model = new CatModel();
        $cat_model->cat_name = $cat_name;
        $cat_model->save();

       return redirect('catShow/');
    }
}
