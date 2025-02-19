<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Purchases;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class purchasesController extends Controller
{

    public function index()
    {

        $purchases = Purchases::all();
        $productIds = $purchases->pluck('product_id');
        $products = Products::whereIn('id', $productIds)->get();

        return view('purchases', [
            'purchases' => $purchases,
            'products' => $products,
            'title' => "Purchases"
        ]);
    }

    public function create()
    {

        $suppliers = Suppliers::all();
        $products = Products::all();

        $session = session()->all();
        if ($session['admin']['role'] !== 'admin' && $session['admin']['role'] !== 'manager') {
            return redirect()->route('purchases')->with('error', 'You are not authorized to access this page.');
        }
        return view('purchases-create', [
            'suppliers' => $suppliers,
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'contact' => 'required',
        ]);
        $date = now();
        $result = Purchases::create([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'quantity' => $request->quantity,
            'contact' => $request->contact,
            'invoice' => "INV-" . $date->year . $date->month . $date->day . $date->hour . $date->minute . $date->second,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        if ($result) {

            return redirect()->route('purchases')->with('success', 'Purchases created successfully');
        }
    }
}
