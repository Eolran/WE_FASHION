<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    //
    public function show(string $id): View
    {
        // print_r(Product::findOrFail($id));
        // die;
        // $product = Product::select(['id'])->where("id", $id)->first();
        $product = Product::findOrFail($id);
        return view('product', [
            'product' => $product,
            
        ]);
    }

    public function list(): View
    {
        // print_r(Product::findOrFail($id));
        // die;
        // $product = Product::select(['id'])->where("id", $id)->first();
        $products = Product::all();
        return view('welcome', [
            'products' => $products,
            
        ]);
    }
}