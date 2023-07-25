<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterProduct;
use App\Models\MasterTransaction;


class MasterTransactionController extends Controller
{
    public function index()
    {
        $transactions = MasterTransaction::all();
        return view('master_transactions.index', compact('transactions'));
        // return view('master_transactions.index', compact('products'));
    }

    public function store(Request $request)
    {
        $product = MasterProduct::findOrFail($request->input('product_id'));

        // Cek apakah produk sudah kadaluarsa
        if ($product->expired_date < now()) {
            return redirect()->route('master_transactions.index')->with('error', 'Produk sudah kadaluarsa dan tidak dapat dipesan.');
        }

        $transaction = new MasterTransaction();
        $transaction->order_date = $request->input('order_date');
        $transaction->order_number = uniqid('ORDER');
        $transaction->customer_name = $request->input('customer_name');
        $transaction->product_id = $request->input('product_id');
        $transaction->quantity = $request->input('quantity');
        $transaction->total_price = $product->unit_price * $request->input('quantity');
        $transaction->save();

        return redirect()->route('master_transactions.index')->with('success', 'Pemesanan berhasil dilakukan.');
    }

    public function create() 
    {
        $products = MasterProduct::where('expired_date', '>=', now())->get();
        return view('master_transactions.create', compact('products'));
    }
}
