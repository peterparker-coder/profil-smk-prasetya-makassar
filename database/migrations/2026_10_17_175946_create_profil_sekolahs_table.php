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
    Schema::create('profil_sekolahs', function (Blueprint $table) {
        $table->id();
        $table->text('sejarah')->nullable();
        $table->text('visi')->nullable();
        $table->longText('misi')->nullable();
        $table->string('nama_kepala_sekolah')->nullable();
        $table->text('sambutan_kepala_sekolah')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolahs');
    }
};
