<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function product():View
    {
        $products = Product::paginate(5);
        return view('products.product_all',compact('products'));
    }

    public function getProduct(Product $code):View
    {
        return view('products.product_show',compact('code'));
    }
}
