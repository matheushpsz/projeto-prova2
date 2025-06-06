<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros'; // referência à tabela no banco de dados
    protected $fillable = ['titulo', 'sinopse','genero_id', 'autor_id']; // campos que podem ser preenchidos em massa

    public function reviews()
    {
        return $this->hasMany( // um livro tem muitas reviews
            Review::class,
            'livro_id', // chave estrangeira na tabela reviews
            'id' // chave primária na tabela livros
        );
    }
    public function genero()
    {
        return $this->belongsTo( // um livro pertence a um gênero AQUE RECEBE A CHAVE ESTRANGEIRA
            Genero::class,
            'genero_id', // chave estrangeira na tabela livros
            'id' // chave primária na tabela generos
        );
    }
    public function autor()
    {
        return $this->belongsTo( // um livro pertence a um autor AQUE RECEBE A CHAVE ESTRANGEIRA
            Autor::class,
            'autor_id', // chave estrangeira na tabela livros
            'id' // chave primária na tabela autores
        );
    }
}
