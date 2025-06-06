<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos'; // referência à tabela no banco de dados
    protected $fillable = ['nome']; // campos que podem ser preenchidos em massa

    public function livros()
    {
        return $this->hasMany( // um gênero tem muitos livros
            Livro::class,
            'genero_id', // chave estrangeira na tabela livros
            'id' // chave primária na tabela generos
        );
    }
}
