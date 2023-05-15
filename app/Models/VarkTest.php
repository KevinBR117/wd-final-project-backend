<?php

namespace App\Models\VarkTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class varkTest extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(Users::class, 'email', 'email');
    }
}
