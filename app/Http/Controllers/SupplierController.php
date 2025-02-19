<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Purchases;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('supplier', [
            'suppliers' => $suppliers,
            'test' => []
        ]);
    }

    public function show($id)
    {
        $supplier = Suppliers::find($id);
        $purchases = Purchases::where('supplier_id', '=', $id)->get();
        return view('supplier-show', [
            'supplier' => $supplier,
            'purchases' => $purchases,
        ]);
    }

    public function create()
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin') {
            return redirect()->route('suppliers')->with('error', 'You are not authorized to access this page.');
        }
        return view('supplier-create');
    }

    public function store(Request $request)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin') {
            return redirect()->route('suppliers')->with('error', 'You are not authorized to access this page.');
        }
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);

        Suppliers::create($request->all());
        return redirect()->route('suppliers')->with('success', 'Supplier created successfully');
    }

    public function destroy($id)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin') {
            return redirect()->route('suppliers')->with('error', 'You are not authorized to access this page.');
        }
        Suppliers::find($id)->delete();
        return redirect()->route('suppliers')->with('delete', 'Supplier deleted successfully');
    }

    public function edit($id)
    {
        $supplier = Suppliers::find($id);
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin') {
            return redirect()->route('suppliers')->with('error', 'You are not authorized to access this page.');
        }

        return view('supplier-edit', [
            'supplier' => $supplier
        ]);
    }

    public function update(Request $request, $id)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'admin') {
            return redirect()->route('suppliers')->with('error', 'You are not authorized to access this page.');
        }
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);
        $supplier = Suppliers::find($id);
        $supplier->update($request->all());
        return redirect()->route('suppliers')->with('update', 'Supplier updated successfully');
    }
}
