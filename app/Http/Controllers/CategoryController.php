<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function category(): View
    {

        $categories = Category::orderBy('title')->paginate(7);
        return view('categories.categorypage', compact('categories'));
    }

    public function categoryProducts(Category $categories): View
    {
        if ($categories->active) {
            $products = $categories->products->all();
            return view('categories.category_products', compact('categories', 'products'));
        } else {
            abort(404);
        }
    }

    public function sortByPrice(Category $categories): View
    {
        $products = '';
        if (request()->choice == 'all') {
            $products = $categories->products;
        }
        if (request()->choice == 'cheap') {
            $products = $categories->products->sortBy('price');
        }
        if (request()->choice == 'dear') {
            $products = $categories->products->sortByDesc('price');
        }
        return view("categories.category_products", compact('categories', 'products'));
    }

    public function sortFromTo(Category $categories): View
    {
        $price_from = (int)request()->from;
        $price_to = (int)request()->to;
        $products = $categories->products
            ->where('category_id', '=', $categories->id)
            ->whereBetween('price', [$price_from, $price_to]);
        return view("categories.category_products", compact('categories', 'products'));
    }
}
