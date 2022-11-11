@extends('layouts.main')
@section('content')

    <div class="container mt-2">
        <div class="card border-0 bg-transparent">
            <div class="card-header">
              <h3>Create Suplier</h3>
            </div>
            <div class="card-body">
              <div>
                <form action="/suplier" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_suplier" class="form-label">nama suplier</label>
                        <input type="text" class="form-control w-50 @error('nama_suplier') is-invalid @enderror" id="nama_suplier" name="nama_suplier" required>
                        @error('nama_suplier')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
              </div>
              <div>
                <a href="/suplier" class="btn btn-danger" style="text-decoration: none; color:white">Cancel</a>
            </div>
            </div>
        </div>
    </div>
@endsection