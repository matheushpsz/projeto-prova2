<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews'; // referência à tabela no banco de dados
    protected $fillable = ['nota', 'texto','usuario_id','livro_id']; // campos que podem ser preenchidos em massa
    
    public function usuario()
    {
        return $this->belongsTo( // uma review pertence a um usuario, AQUI RECEBE A CHAVE ESTRANGEIRA
            Usuario::class, 
            'usuario_id', // chave estrangeira na tabela reviews
            'id' // chave primária na tabela usuarios
        );
    }
    public function livro()
    {
        return $this->belongsTo( // uma review pertence a um livro, AQUI RECEBE A CHAVE ESTRANGEIRA
            Livro::class, 
            'livro_id', // chave estrangeira na tabela reviews
            'id' // chave primária na tabela livros
        );
    }
}
