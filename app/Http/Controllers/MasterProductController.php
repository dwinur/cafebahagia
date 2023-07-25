<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterProduct;


class MasterProductController extends Controller
{
    public function index()
    {
        $products = MasterProduct::all();
        return view('master_products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new MasterProduct();
        $product->product_code = uniqid('P');
        $product->product_name = $request->input('product_name');
        $product->expired_date = $request->input('expired_date');
        $product->unit_price = $request->input('unit_price');
        $product->size = $request->input('size');
        $product->category = $request->input('category');
        $product->save();

        return redirect()->route('master_products.index')->with('success', 'Pemesanan berhasil dilakukan.');
    }

    public function create() {
        return view('master_products.create');
    }
}
