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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('fotoalum')->nullable(); // simpan path foto
            $table->string('namaalum');
            $table->unsignedBigInteger('category_id');
            $table->text('deskripsialum');
            $table->unsignedTinyInteger('rating')->nullable(); // 1-5 bintang
            $table->string('angkatan'); // bisa integer kalau tahunnya saja
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
