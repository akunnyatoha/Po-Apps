@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col mb-2">
                <a href="/purchase" class="btn btn-danger" style="width:200px; heigh:200px">PURCHASE ORDER</a>
            </div>
            <div class="col mb-2">
                <a href="/sales/create" class="btn btn-danger" style="width:200px; heigh:200px">SALES ORDER</a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col mb-2">
                <a href="/barang" class="btn btn-danger" style="width:200px; heigh:200px">MASTER BARANG</a>
            </div>
            <div class="col mb-2">
                <a href="/suplier" class="btn btn-danger" style="width:200px; heigh:200px">MASTER SUPLIER</a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col mb-2">
                <a href="/customer" class="btn btn-danger" style="width:200px; heigh:200px">MASTER CUSTOMER</a>
            </div>
            <div class="col mb-2">
                <a href="/reportPo" class="btn btn-danger" style="width:200px; heigh:200px">REPORT PEMBELIAN</a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col mb-2">
                <a href="/reportSo" class="btn btn-danger" hight style="width:200px; heigh:200px">REPORT PENJUALAN</a>
            </div>
        </div>
    </div>
@endsection