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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('nota');
            $table->text('texto')->nullable(); // texto da review, pode ser nulo

            $table->unsignedBigInteger('livro_id'); // chave estrangeira para o livro
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('cascade'); // referência à tabela livros

            $table->unsignedBigInteger('usuario_id'); // chave estrangeira para o usuário
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade'); // referência à tabela usuarios
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
