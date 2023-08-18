<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    function index(){
        return view('frontend.home.index', ['products'=>Product::all()]);
    }
}
