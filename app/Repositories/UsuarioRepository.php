<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function all()
    {
        return Usuario::all();
    }

    public function find($id)
    {
        return Usuario::find($id);
    }

    public function create(array $data)
    {
        return Usuario::create($data);
    }

    public function update($id, array $data)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->update($data);
        }
        return $usuario;
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->delete();
        }
        return $usuario;
    }
}