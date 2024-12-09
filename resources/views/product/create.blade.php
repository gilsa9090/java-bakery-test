@extends('overview.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambahkan Ikan</h4>
        <div class="card mb-4">
            <div class="card-body">
                <form action="/product" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="fish">Nama Product</label>
                    <input type="text" class="form-control" name="product"/>
                  </div>
                  @error('product')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label class="form-label" for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga"/>
                  </div>
                  @error('harga')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <select name="jenis" class="form-control">
                        <option value="">-- Pilih jenis --</option>
                        @forelse ($jenis as $item)
                        <option value="{{$item->id}}">{{$item->jenis}}</option>
                        @empty
                        <option value="">Belum Ada Data yang Terisi</option>
                        @endforelse
                    </select>
                  </div>  
                  @error('jenis')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label class="form-label" for="image">Stok</label>
                    <input type="text" name="stok" class="form-control">
                  </div>
                  @error('stok')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Aktif</option>
                        <option value="0">Non Aktif</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection