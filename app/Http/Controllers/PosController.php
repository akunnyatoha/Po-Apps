<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use App\Models\PuchaseOrder;
use App\Models\SalesOrder;
use App\Models\Suplier;
use Illuminate\Http\Request;

class PosController extends Controller
{

    //Suplier Method
    public function indexSuplier()
    {
        return view('suplier.suplier', [
            "title" => "Suplier",
            "data" => Suplier::get()->all()
        ]);
    }

    public function createSuplier()
    {
        return view('suplier.create', [
            "title" => "Create Suplier"
        ]);
    }

    public function storeSuplier(Request $request)
    {
        $validate = $request->validate([
            "nama_suplier" => "required|max:20"
        ]);

        Suplier::create($validate);

        return redirect("/suplier")->with('success', "Data berhasil ditambahkan!");
    }


    //Customer Method
    public function indexCustomer()
    {
        return view('customer.customer', [
            "title" => "Customer",
            "data" => Customer::get()->all()
        ]);
    }

    public function createCustomer()
    {
        return view('customer.create', [
            "title" => "Create Customer",
        ]);
    }

    public function storeCustomer(Request $request)
    {
        $validate = $request->validate([
            "nama_customer" => "required|max:20"
        ]);

        Customer::create($validate);

        return redirect("/customer")->with('success', "Data berhasil ditambahkan!");
    }

    //Barang Method
    public function indexBarang()
    {
        return view('barang.barang', [
            "title" => "Barang",
            "data" => Barang::get()->all()
        ]);
    }

    public function createBarang()
    {
        return view('barang.create', [
            "title" => "Create Customer",
        ]);
    }

    public function storeBarang(Request $request)
    {
        $validate = $request->validate([
            "nama_barang" => "required|max:20",
            "quantity" => "required|max:50"
        ]);

        Barang::create($validate);

        return redirect("/barang")->with('success', "Data berhasil ditambahkan!");
    }

    //PO Methode
    public function indexPo()
    {
        return view('report.poIndex', [
            "title" => "Report Pembelian",
            "data" => PuchaseOrder::get()->all()
        ]);
    }

    public function createPo()
    {
        return view('po', [
            "title" => "Create Suplier",
            "suplier" => Suplier::get()->all(),
            "barang" => Barang::get()->all()
        ]);
    }

    public function storePo(Request $request)
    {

        // dd($request);
        $data = $request->validate([
            "nama_suplier" => "required",
            "nama_barang" => "required",
            "quantity" => "required",
            "harga" => "required",
            "discount" => "required",
            "ppn" => "required",
            "total" => "required"
        ]);

        $stock = Barang::get()->where('nama_barang', $data["nama_barang"])->first();
        $quantity = $stock->quantity;

        $qtyTotal = $quantity + $data["quantity"];

        Barang::where('nama_barang', $data["nama_barang"])->update(['quantity' => $qtyTotal]);

        PuchaseOrder::create(
            $data
        );

        return redirect('/reportPo')->with('success', 'Purchase Order Success');
    }

    //SO Methode
    public function indexSo()
    {
        return view('report.soIndex', [
            "title" => "Report Penjualan",
            "data" => SalesOrder::get()->all()
        ]);
    }

    public function createSo()
    {
        return view('so', [
            "title" => "Sales Order",
            "customer" => Customer::get()->all(),
            "barang" => Barang::get()->all()
        ]);
    }

    public function storeSo(Request $request)
    {
        $validate = $request->validate([
            "nama_customer" => "required",
            "nama_barang" => "required",
            "quantity" => "required",
            "harga" => "required",
            "discount" => "required",
            "ppn" => "required",
            "total" => "required",
        ]);

        $stock = Barang::get()->where('nama_barang', $validate['nama_barang'])->first();
        $quantity = $stock->quantity;

        // echo $quantity;

        if ($validate['quantity'] < $quantity) {
            $qtyTotal = $quantity - $validate['quantity'];

            Barang::where('nama_barang', $validate["nama_barang"])->update(['quantity' => $qtyTotal]);
            SalesOrder::create($validate);
            return redirect('/reportSo')->with('success', 'Sales Order Berhasil!');
        }
    }
}
