<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_transaksi')->unsigned()->unique(); 
            $table->unsignedBigInteger('id_product')->unsigned()->unique();
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')->on('transaksis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
