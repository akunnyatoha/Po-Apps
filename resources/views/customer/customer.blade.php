@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
          @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mt-3 bg-transparent border-0">
                <div class="card-header">
                    <h3>Data Customer</h3>
                </div>
                <div class="card-body">
                    <div>
                      <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id_Customer</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php $i = 1; ?>
                          @foreach ($data as $item)
                          <tr>
                            <th><?= $i; ?></th>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_customer}}</td>
                            <td class="d-flex justify-content-center">
                              <form action="" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit" name="submit">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php  $i++; ?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="mt-5">
                      <a href="/customer/create" class="btn btn-danger">Tambah Data</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection