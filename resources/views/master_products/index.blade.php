@extends('layouts.master')
@section('content')
<h2>Daftar Produk</h2>
<a href="{{ route('master_products.create') }}" class="btn btn-success btn-xs btn-flat mb-3">Tambah Produk</a>
<table class="table table-bordered">
    <thead class="table-primary">
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Expired Date</th>
        <th>Harga Satuan</th>
        <th>Ukuran</th>
        <th>Kategori</th>
    </thead>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->product_code }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->expired_date }}</td>
        <td>{{ $product->unit_price }}</td>
        <td>{{ $product->size }}</td>
        <td>{{ $product->category }}</td>
    </tr>
    @endforeach
</table>
@endsection