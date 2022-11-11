@extends('layouts.main')
@section('content')

    <div class="container mt-2">
        <div class="card border-0 bg-transparent">
            <div class="card-header">
              <h3>Create Barang</h3>
            </div>
            <div class="card-body">
              <div>
                <form action="/barang" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control w-50 @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="0" required hidden>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
              </div>
              <div>
                <a href="/barang" class="btn btn-danger" style="text-decoration: none; color:white">Cancel</a>
            </div>
            </div>
        </div>
    </div>
@endsection