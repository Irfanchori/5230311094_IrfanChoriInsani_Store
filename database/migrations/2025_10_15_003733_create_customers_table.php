<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk tabel pelanggan.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id_ctm'); // Primary key
            $table->string('nama_ctm', 100);
            $table->string('email', 100)->unique();
            $table->string('no_hp', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Undo migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};