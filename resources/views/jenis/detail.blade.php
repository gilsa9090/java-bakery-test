@extends('overview.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Details Jenis</h4>
        <div class="card mb-4">
            <div class="card-body">
                <h1><strong>{{$jenis->jenis}}</strong></h1>
                <p>{{ $jenis->status == 1 ? 'Aktif' : 'Non Aktif' }}</p>
                <a href="/jenis"> <button type="button" class="btn btn-outline-primary">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection