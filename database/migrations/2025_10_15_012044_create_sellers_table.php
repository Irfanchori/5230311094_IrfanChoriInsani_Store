<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk tabel penjual.
     */
    public function up(): void
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id_sellers'); // Primary key
            $table->string('nama_sellers', 100);
            $table->string('email', 100)->unique();
            $table->string('no_hp', 20)->nullable();
            $table->string('toko', 100)->nullable(); // nama toko/brand
            $table->text('alamat')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Undo migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};