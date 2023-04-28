<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function show(string $id): View
    {
        $product = Product::findOrFail($id);
        return view('product', [
            'product' => $product,

        ]);
    }

    public function list(): View
    {
        $products = Product::all();
        return view('welcome', [
            'products' => $products,

        ]);
    }
    // 
    public function listAdmin()
    {
        $products = Product::all();

        if (Auth::user() == null) {
            return redirect(route('auth.login'));
        } else {
        return view('admin.admin', [
            'products' => $products,
        ]) ;
        };
        // dd(Auth::user());

    }

    public function deleteAdmin(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect("admin");
    }

    public function formEditAdmin(string $id)
    {
        $product = Product::findOrFail($id);
        if (Auth::user() == null) {
            return redirect(route('auth.login'));
        } else {
            return view('admin.edit', [
                'product' => $product,
            ]);
        }
    }
    public function updateAdmin(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->input('name');
        $product->product_description = $request->input('desc');
        $product->product_price = $request->input('price');
        $product->product_state = $request->input('state');
        $product->update();
        return redirect("admin");
    }

    public function addAdmin()
    {
        if (Auth::user() == null) {
            return redirect(route('auth.login'));
        } else {
            return view('admin.add');
        }
    }
    public function createAdmin(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('name');
        $product->product_description = $request->input('desc');
        $product->product_price = $request->input('price');
        $product->product_state = $request->input('state');
        $product->product_published = $request->input('published');
        $product->product_referenceId = rand(16, 16);
        $product->save();

        return redirect("admin");
    }
}