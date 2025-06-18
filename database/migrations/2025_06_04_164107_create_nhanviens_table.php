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
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->integerIncrements('id_nv');
            $table->string('name_nv');
            $table->string('mota');
            $table->string('birthday');
            $table->unsignedInteger('id_phong');
            $table->foreign('id_phong')->references('id_phong')->on('phongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhanviens');
    }
};
