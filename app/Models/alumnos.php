<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;
    public $table = "alumnos";
    public $fillable = [
        "nombre","apellido","edad","ci","telefono","direccion"
    ];
}
