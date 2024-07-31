<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'title',
        'description',
        'completed'
    ];

    // Outros métodos e configurações
}