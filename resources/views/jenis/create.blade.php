@extends('overview.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambahkan Jenis</h4>
        <div class="card mb-4">
            <div class="card-body">
                <form action="/jenis" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label" for="jenis">Jenis</label>
                    <input type="text" class="form-control" name="jenis"/>
                  </div>
                  @error('jenis')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="1">Aktif</option>
                        <option value="0">Non Aktif</option>
                    </select>
                  </div>
                  @error('image')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection