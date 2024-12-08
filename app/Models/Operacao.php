<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $table = "operacoes";

    protected $fillable = [
        'tipo'
    ];

    public function resolucoes() {
        return $this->hasMany(Resolucao::class);
    }
}
