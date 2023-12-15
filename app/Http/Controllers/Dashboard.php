<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Dashboard extends Controller
{
    

    public function index(){

        $categories = Category::all();
        return view("dashboard.form-post")->with("categories",$categories);

    }





}
