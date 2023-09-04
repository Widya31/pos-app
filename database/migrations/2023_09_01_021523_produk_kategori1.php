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
        Schema::table('produk1s', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kategori')->change();
            $table->foreign('id_kategori')->references('id')->on('kategori1s')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk1s', function (Blueprint $table) {
            $table->dropForeign(['id_kategori']);
            $table->bigInteger('id_kategori')->change();
        });
    }
};
