<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $productImages = ProductImage::where('product_id', $product->id)->get();
        return view('product.show', compact('product', 'productImages'));
    }
}
