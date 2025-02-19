<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Products;
use App\Models\Stoc_transactions;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Stoc_transactions::all();
        return view('transaction', [
            'transactions' => $transactions,
            'test' => []
        ]);
    }

    public function create()
    {
        $products = Products::all();
        $session = session()->all();
        if ($session['admin']['role'] !== 'cashier') {

            return redirect()->route('transactions')->with('error', 'You are not authorized to access this page.');
        }
        return view('transactions-create', [
            "products" => $products
        ]);
    }

    public function store(Request $request)
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'cashier') {
            return redirect()->route('transactions')->with('error', 'You are not authorized to access this page.');
        }
        $newCustomer = Customers::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address

        ]);
        $customerId = $newCustomer->id;

        $validateData = $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'quantity' => 'required',
            'transaction_type' => 'required'

        ]);

        $stoc_transaction = Stoc_transactions::create([
            'product_id' => $validateData['product_id'],
            'customer_id' => $customerId,
            'quantity' => $validateData['quantity'],
            'transaction_type' => $validateData['transaction_type'],

        ]);
        $product = Products::find($validateData['product_id']);

        // Cek apakah stok mencukupi
        if ($product->stock <= 0) {
            return back()->with('error', 'Pembelian gagal! Stok habis.');
        }

        if ($product->stock < $validateData['quantity']) {
            return back()->with('error', 'Pembelian gagal! Stok tidak mencukupi.');
        }

        // Update stok produk setelah pembelian berhasil
        $product->update([
            'stock' => $product->stock - $validateData['quantity']
        ]);

        return redirect('/transactions')->with('success', 'Transaction created successfully');
    }
}
