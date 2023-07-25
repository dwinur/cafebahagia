@extends('layouts.master')
@section('content')
<h1>Form Tambah Produk</h1>
<form action="{{ route('master_products.store') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="product_name" class="col-sm-2 col-form-label">Nama Produk:</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="expired_date" class="col-sm-2 col-form-label">Tanggal Kedaluwarsa:</label>
        <div class="col-sm-3">
            <input type="date" name="expired_date" id="expired_date" class="form-control" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="unit_price" class="col-sm-2 col-form-label">Harga Barang:</label>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="unit_price" name="unit_price" min="1" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="category" class="col-sm-2 col-form-label">Kategori Barang:</label>
        <div class="col-sm-3">
            <select name="category" id="category" class="form-select" required>
                <option value="">Pilih Kategori</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="size" class="col-sm-2 col-form-label">Pilih Size</label>
        <div class="col-sm-3">
            <select name="size" id="size" class="form-select" required>
                <option value="">Pilih Size</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
            </select>
        </div>
    </div>
    <div class="col-auto">
        <input type="submit" class="btn btn-success" value="Tambah">
    </div>
</form>
@endsection