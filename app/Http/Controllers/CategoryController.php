<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    function index() {
       
        $listCategories = Category::all();
        
        return view('category.index', [
            'categories' => $listCategories
        ]);
    }

    function create() {
        return view('category.create');
    }

    function store(Request $request) {

         $category = new Category();
         $category->label = $request->input('label');

         $category->save();

         return redirect('/category');
    }
}
