<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = ['nome','data','peso','sexo','cpf'];
    protected $table = 'pessoas';
}
