@extends('overview.master')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-primary alert-dismissible mb-3" role="alert">
      {{ session('status') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h5 class="card-header">Daftar Grade</h5>
    <div class="table-responsive text-nowrap px-4 mb-4">
        <a href="/product/create" class="mb-4 pb-4"><button type="button" class="btn btn-outline-primary ">Tambahkan</button></a>
        <table class="table table-striped" id="example">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Product</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>stok</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0  px-4">
            @forelse ($product as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->product}}</strong>
                </td>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->jenis->jenis}}</strong>
                </td>
                </td>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->harga}}</strong>
                </td>
                </td>
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->stok}}</strong>
                </td>
                </td>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i>
                  <strong>
                      {{ $item->status == 1 ? 'Aktif' : 'Non Aktif' }}
                  </strong>
                </td>
                <td>
                <form action="/product/{{$item->id}}" method="post">
                @csrf
                @method('delete')
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/product/{{$item->id}}"><i class="bx bx-show me-1"></i> Details</a>
                      <a class="dropdown-item" href="/product/{{$item->id}}/edit"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <input type="submit" class="dropdown-item" value="Delete">
                    </div>
                  </div>
                </form>
                </td>
              </tr>
            @empty
            <tr>
            <strong>Tidak Ada isinya</strong>    
            </tr>   
            @endforelse
          
        </tbody>
      </table>
    </div>
  </div>
@endsection