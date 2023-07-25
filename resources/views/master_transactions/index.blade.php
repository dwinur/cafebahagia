@extends('layouts.master')
@section('content')
<h2>List Pesanan</h2>
<a href="{{ route('master_transactions.create') }}" class="btn btn-success btn-xs btn-flat mb-3">Tambah Pesanan</a>
<table class="table table-bordered">
    <thead class="table-primary">
        <th>ID</th>
        <th>Tanggal Pemesanan</th>
        <th>No. Pemesanan</th>
        <th>Nama Pelanggan</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
    </thead>
    @foreach ($transactions as $transaction)
    <tr>
        <td>{{ $transaction->id }}</td>
        <td>{{ $transaction->order_date }}</td>
        <td>{{ $transaction->order_number }}</td>
        <td>{{ $transaction->customer_name }}</td>
        <td>{{ $transaction->product->product_code }}</td>
        <td>{{ $transaction->product->product_name }}</td>
        <td>{{ $transaction->quantity }}</td>
        <td>{{ $transaction->total_price }}</td>
    </tr>
    @endforeach
</table>
@endsection