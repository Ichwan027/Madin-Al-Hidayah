<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatan_alumnis', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('slug')->unique();

            $table->date('tanggal');

            $table->string('cover')->nullable();

            $table->longText('isi');

            $table->enum('status',[
                'Publish',
                'Draft'
            ])->default('Draft');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatan_alumnis');
    }
};