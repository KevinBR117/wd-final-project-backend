<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class varkTest extends Model
{
    use HasFactory;
    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'correo', 'correo');
    }
}
