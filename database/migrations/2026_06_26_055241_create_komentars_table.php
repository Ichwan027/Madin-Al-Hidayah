<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('komentars', function (Blueprint $table) {

            $table->id();

            $table->foreignId('artikel_id')
                ->constrained('artikels')
                ->cascadeOnDelete();

            $table->string('nama');

            $table->string('email');

            $table->text('komentar');

            $table->enum('status',[
                'Pending',
                'Approve'
            ])->default('Pending');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};