@extends('layouts.master')
@section('content')
<h1>Form Pemesanan</h1>
<form action="{{ route('master_transactions.store') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="order_date" class="col-sm-2 col-form-label">Tanggal Pemesanan:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="order_date" name="order_date" min="2023-07-25" max="2023-07-25" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="customer_name" class="col-sm-2 col-form-label">Nama Pelanggan:</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="product_id" class="col-sm-2 col-form-label">Produk:</label>
        <div class="col-sm-3">
            <select id="product_id" name="product_id" class="form-select" required>
                <option value="">Pilih Produk</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="quantity" class="col-sm-2 col-form-label">Jumlah:</label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
    </div>
    <div class="col-auto">
        <input type="submit" class="btn btn-primary" value="Pesan">
    </div>
</form>
@endsection