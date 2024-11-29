<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    
    public function index() {
        $cities = \App\Models\City::orderBy('name')->get();
        
        return view("pages.index.index")->with('cities', $cities);
    }

}
