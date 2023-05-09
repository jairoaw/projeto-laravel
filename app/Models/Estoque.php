<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    use HasFactory;
    use SoftDeletes; //adiciona a funcionalidade de soft delete
    protected $fillable = [      //define quais campos podem ser preenchidos
        'id',
        'nome', 
        'quantidade'
    ];
}
