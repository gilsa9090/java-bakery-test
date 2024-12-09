@extends('overview.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Details Product</h4>
        <div class="card mb-4">
            <div class="card-body">
                <h1><strong>{{$product->product}}</strong></h1>
                <h2><strong>{{$product->jenis->jenis}}</strong></h2>
                <p>{{ $product->status == 1 ? 'Aktif' : 'Non Aktif' }}</p>
                <a href="/product"> <button type="button" class="btn btn-outline-primary">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection