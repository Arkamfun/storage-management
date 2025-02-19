<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Purchases;
use App\Models\Stoc_transactions;
use App\Models\Suppliers;

class AdminDashboard extends Controller
{
    public function index()
    {
        $products = Products::all();
        $purchases = Purchases::all();
        $stoc_transactions = Stoc_transactions::all();
        $suppliers = Suppliers::all();
        $arrProducts = $products->toArray();
        $arrPurchases = $purchases->toArray();
        $arrStoc_transactions = $stoc_transactions->toArray();
        $totalStock = $purchases->sum('quantity');
        if (!isset(session()->all()['admin'])) {
            return redirect()->route('login');
        }
        return view('dashboard', [
            'title' => 'Dashboard',
            'purchases' => $arrPurchases,
            'transactions' => $arrStoc_transactions,
            'products' =>  $products->toArray(),
            'suppliers' =>  $suppliers->toArray(),
            'totalStock' => $totalStock,

        ]);
    }
}
