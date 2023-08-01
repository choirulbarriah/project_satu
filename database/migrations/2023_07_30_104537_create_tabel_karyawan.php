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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->integer('id_karyawan_choirul');
            $table->string('nik_karyawan_choirul', '60');
            $table->string('nama_karyawan_choirul', '50');
            $table->string('alamat_karyawan_choirul', '55');
            $table->integer('Nohp_karyawan_choirul', '20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
