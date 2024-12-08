<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolucao extends Model
{
    use HasFactory;

    protected $table = "resolucoes";

    protected $fillable = [
        'tipo', 'pontuacao', 'acertou', 'errou', 'usuario_id'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function operacao() {
        return $this->belongsTo(Operacao::class);
    }
}
