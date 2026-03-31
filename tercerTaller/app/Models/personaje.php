<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nombre', 'clase', 'raza', 'estatura', 'habilidades', 'historia'
    ];

    protected $casts = [
        'habilidades' => 'array', // Convierte JSON a array automáticamente
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}