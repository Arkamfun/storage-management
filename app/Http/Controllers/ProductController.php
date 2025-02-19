<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Purchases;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('product', [
            'title' => 'product',
            'products' =>  $products,
        ]);
    }

    public function create()
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }
        return view('product-create');
    }

    public function store(Request $request)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);
        Products::create($request->all());
        return redirect('/products')->with('success', 'Product created successfully');
    }
    public function edit($id)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }
        $product = Products::find($id);
        return view('product-edit', [
            'product' => $product
        ]);
    }
    public function update(Request $request, $id)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $product = Products::find($id);
        $product->update($request->all());
        return redirect('/products')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }

        $product = Products::find($id);
        $product->delete();
        return redirect('/products')->with('delete', 'Product deleted successfully');
    }
}
