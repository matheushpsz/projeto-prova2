<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores'; // referência à tabela no banco de dados
    protected $fillable = ['nome','data_nascimento', 'biografia']; // campos que podem ser preenchidos em massa

    public function livros()
    {
        return $this->hasMany( // um autor tem muitos livros
            Livro::class,
            'autor_id', // chave estrangeira na tabela livros
            'id' // chave primária na tabela autores
        );
    }
}
