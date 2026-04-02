<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'nombre',
    'clase',
    'raza',
    'estatura',
    'habilidades',
    'historia',
    'legendario',
    'villano'
];

protected $casts = [
    'habilidades' => 'array',
    'legendario' => 'boolean',
    'villano' => 'boolean',
];

    public function user() {
        return $this->belongsTo(User::class);
    }
}