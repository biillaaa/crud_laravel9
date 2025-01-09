@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <div class="mb-3">
        <strong>Nama Produk:</strong> {{ $product->name }}
    </div>
    <div class="mb-3">
        <strong>Deskripsi:</strong> {{ $product->description }}
    </div>
    <div class="mb-3">
        <strong>Harga:</strong> {{ number_format($product->price, 2) }}
    </div>
    <div class="mb-3">
        <strong>Stok:</strong> {{ $product->stock }}
    </div>
    <a href="{{ url('/products') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
