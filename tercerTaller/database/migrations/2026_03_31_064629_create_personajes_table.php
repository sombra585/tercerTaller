<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('personajes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('nombre');
    $table->string('clase');
    $table->string('raza');
    $table->integer('estatura')->nullable();
    $table->json('habilidades')->nullable();
    $table->text('historia')->nullable();

    // 🔥 NUEVOS CAMPOS
    $table->boolean('legendario')->default(false);
    $table->boolean('villano')->default(false);

    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};