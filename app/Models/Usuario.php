<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'email', 'senha'
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

    // Define o relacionamento 1:N com o modelo Resolucao
    public function resolucoes()
    {
        return $this->hasMany(Resolucao::class);

        
        
    }
}
