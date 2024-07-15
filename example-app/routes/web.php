<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

Route::get('/', function () {
    // return view('welcome');
    /* Query Builder */
    
    // $query = DB::table('categories')->select('id', 'name');
    // $categories = $query->get();
    
    
    $categories = Category::all();
    foreach($categories as $category) {
        echo $category->name.'<hr/>';
    }
    dd($categories);




});
