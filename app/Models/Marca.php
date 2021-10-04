<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules()
    {
        return [
            'nome' => 'required|unique:marcas|min:3',
            'imagem' => 'required',
        ];
    }

    public function feedback()
    {
        return  [
            'requere' => 'O campo: attribute é obrigatorio',
            'nome.unique' => 'O nome da marca já existe',
            'nome.min'=>'O nome deve ter no minimo 3 digitos',
        ];
    }
}
