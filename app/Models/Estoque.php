<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;
    protected $fillable = [      //define quais campos podem ser preenchidos
        'nome', 
        'quantidade'
    ];
}
