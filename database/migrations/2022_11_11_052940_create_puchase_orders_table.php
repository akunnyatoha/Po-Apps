<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_suplier');
            $table->string('nama_barang');
            $table->integer('quantity');
            $table->bigInteger('harga');
            $table->integer('discount');
            $table->integer('ppn');
            $table->bigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puchase_orders');
    }
};
