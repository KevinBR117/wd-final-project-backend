<?php

namespace App\Models\VarkTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarkTest extends Model
{
    use HasFactory;

    protected $table = 'vark_user_result';
    public function user()
    {
        return $this->hasOne(Users::class, 'email', 'email');
    }
}
