@extends('layouts.main')
@section('content')

    <div class="container mt-2">
        <div class="card border-0 bg-transparent">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header">
              <h3>Create Customer</h3>
            </div>
            <div class="card-body">
              <div>
                <form action="/customer" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_customer" class="form-label">nama customer</label>
                        <input type="text" class="form-control w-50 @error('nama_customer') is-invalid @enderror" id="nama_customer" name="nama_customer" required>
                        @error('nama_customer')
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
                <a href="/customer" class="btn btn-danger" style="text-decoration: none; color:white">Cancel</a>
            </div>
            </div>
        </div>
    </div>
@endsection