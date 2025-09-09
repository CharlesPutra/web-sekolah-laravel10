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
        Schema::table('jurusans', function (Blueprint $table) {
            //visi misi
            $table->text('visi');
            $table->text('misi');
            //prestasi jurusan
            $table->string('presfot')->nullable();
            $table->string('juara');
            //testimoni alumni
            $table->string('alumfot')->nullable();
            $table->string('namaalum');
            $table->text('desalum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jurusans', function (Blueprint $table) {
            //
        });
    }
};
