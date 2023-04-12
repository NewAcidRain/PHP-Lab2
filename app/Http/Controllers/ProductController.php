<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use mysql_xdevapi\Exception;

class ProductController extends Controller
{
    public function product(): View
    {

        $products = Product::orderBy('title')->paginate(5);
        return view('products.product_all', compact('products'));
    }

    public function getProduct(Product $code): View
    {
        return view('products.product_show', compact('code'));
    }

    public function deleteProduct(Product $code): RedirectResponse
    {
        $code->delete();
        return redirect('/product');
    }

    public function updatePage(Product $code): View
    {
        return view('products.product_edit', compact('code'));
    }

    public function updateProduct(Product $code)
    {
        $data = request()->validate([
            'title' => "string",
            'description' => "string",
            'price' => "int",
            'quantity' => "int",
        ]);

        $path = public_path().'/img/';
        if($code->img != ''  && $code->img != null && $path != $path.'\icons\\')
        {
            $file_old = $path.$code->img;
                unlink($file_old);
        }
            $file = request()->file('img');
        if ($file){
            $fileName = time() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $code->update(['img' => $fileName]);
            $code->update($data);
        }
        else{
            $fileName = null;
            $code->update(['img' => $fileName]);
            $code->update($data);
        }

        return redirect('/product');
    }
}
