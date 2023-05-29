<?php

namespace App\Models\VarkTest;

use App\Models\Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VarkTest extends Model
{
    use HasFactory;

    protected $table = 'vark_users_result';
    public function user()
    {
        return $this->hasOne(Users::class, 'email', 'email');
    }
}
