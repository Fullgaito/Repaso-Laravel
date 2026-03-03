<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proteinas', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->decimal('peso', 8, 2);
            $table->decimal('precio', 8, 2);
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proteinas');
    }
};