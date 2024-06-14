<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = ProductModel::all();

        $title = "Home";
        return view('welcome', compact('title','products'));
    }
}
