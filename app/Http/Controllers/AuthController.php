<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();
            $request->session()->put('admin', $admin);
            // dd(session()->all());
            $products = Products::all();
            return redirect()->route('dashboard')->with([
                'message' => 'Login berhasil',
                'products' => $products
            ]);
        }
        return redirect()->route('login')->with('error', 'email / password salah');

        // $products = Products::all();
        // return view('dashboard', [
        //     "products" => $products
        // ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect()->route('login')->with('message', 'Logout berhasil');
    }

    public function register()
    {
        $session = session()->all();
        if ($session['admin']['role'] !== 'manager') {
            return redirect()->route('products')->with('error', 'You are not authorized to access this page.');
        }
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);
        $result = Admins::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        if ($result) {
            $request->session()->forget('admin');
            return redirect()->route('login')->with('register', 'Register berhasil');
        } else {
            return redirect()->route('register')->with('error', 'Register gagal');
        }
    }
}
