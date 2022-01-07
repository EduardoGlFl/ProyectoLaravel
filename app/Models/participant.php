<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres', 'apellidoPaterno', 'apellidoMaterno', 'genero', 'email', 'telefono'
    ];

    public $timestamps = false;

    protected $table = 'participants';
}
