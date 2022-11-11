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
                    <h3>Report Pembelian</h3>
                </div>
                <div class="card-body">
                    <div>
                      <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Suplier</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Discount (%)</th>
                            <th scope="col">PPN (%)</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php $i = 1; ?>
                          @foreach ($data as $item)
                          <tr>
                            <th><?= $i; ?></th>
                            <td>{{$item->nama_suplier}}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->discount}}</td>
                            <td>{{$item->ppn}}</td>
                            <td>{{$item->total}}</td>
                          </tr>
                          <?php  $i++; ?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="mt-5">
                      <a href="/purchase" class="btn btn-danger">Purchase Order</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection