<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        $category = Category::findOrFail($category);
        return view('category.show', compact('category'));
    }
}
