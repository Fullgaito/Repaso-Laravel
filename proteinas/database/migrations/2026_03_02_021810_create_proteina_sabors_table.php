<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    
    Schema::create('proteina_sabors', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('proteina_id');
        $table->unsignedBigInteger('sabor_id');
        $table->foreign('proteina_id')->references('id')->on('proteinas')->onDelete('cascade');
        $table->foreign('sabor_id')->references('id')->on('sabores')->onDelete('cascade');
        $table->timestamps();
        });
    }

public function down(): void
{
    Schema::dropIfExists('proteina_sabors');
}
};
