@extends('layouts.main')
@section('content')

    <div class="container mt-2">
        <div class="card border-0 bg-transparent">
            <div class="card-header">
              <h3>Purchase Order</h3>
            </div>
            <div class="card-body">
              <div>
                <form action="/purchase" method="post">
                    @csrf
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="nama_suplier" id="nama_suplier">
                            <option selected>--- Select Suplier ---</option>
                            @foreach ($suplier as $item)
                                <option value="{{$item->nama_suplier}}" name="nama_suplier">{{$item->nama_suplier}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="bg-transparent">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="nama_barang" id="nama_barang">
                            <option selected>--- Select Barang ---</option>
                            @foreach ($barang as $item)
                                <option value="{{$item->nama_barang}}" name="nama_barang">{{$item->nama_barang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Satuan</label>
                        <input type="number" class="form-control" name="harga" id="harga">
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount (%)</label>
                        <input type="number" class="form-control" name="discount" id="discount">
                    </div>
                    <div class="mb-3">
                        <label for="ppn" class="form-label">PPN (%)</label>
                        <input type="number" class="form-control" name="ppn" id="ppn">
                    </div>
                    <div class="mb-3">
                        
                        <input type="number" class="form-control" name="total" id="total" hidden>
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

    <script>

        const quantity = document.querySelector('#quantity');
        const harga = document.querySelector('#harga');
        const discount = document.querySelector('#discount');
        const ppn = document.querySelector('#ppn');
        const total = document.querySelector('#total');

        ppn.addEventListener('change', function() {
            const total1 = quantity.value * harga.value;
            const total2 = total1 - ( total1 * discount.value / 100);
            const total3 = total2 + ( total2 * ppn.value / 100 );
            return total.value = total3;
        })

    </script>
@endsection