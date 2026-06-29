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
        Schema::create('profil_websites', function (Blueprint $table) {

            $table->id();

            $table->string('nama_website')->default('Madrasah Diniyah Al-Hidayah');

            $table->string('nama_madrasah');

            $table->string('slogan')->nullable();

            $table->text('deskripsi')->nullable();

            $table->string('logo')->nullable();

            $table->string('favicon')->nullable();

            $table->text('alamat')->nullable();

            $table->string('telepon')->nullable();

            $table->string('whatsapp')->nullable();

            $table->string('email')->nullable();

            $table->string('facebook')->nullable();

            $table->string('instagram')->nullable();

            $table->string('youtube')->nullable();

            $table->longText('maps')->nullable();

            $table->string('jam_operasional')->nullable();

            $table->string('footer')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_websites');
    }
};