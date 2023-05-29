<?php

namespace App\Models\PersonalityTest;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityTest extends Model
{
    use HasFactory;
    protected $table = 'personality_users_result';
    public function user()
    {
        return $this->hasOne(Users::class, 'email', 'email');
    }
}
