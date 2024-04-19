<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'tb_usuario';

    protected function nombre(): Attribute{
        return Attribute::make(
            set: function($valor){
                return strtolower($valor);
            }
        );
    }
}
