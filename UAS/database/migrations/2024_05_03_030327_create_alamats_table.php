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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUsers');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('Kecamatan');
            $table->string('kelurahan');
            $table->string('RT');
            $table->string('RW');
            $table->string('detail_alamat');
            $table->string('kode_pos');
            $table->timestamps();

            
            $table->foreign('idUsers')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamats');
    }
};
