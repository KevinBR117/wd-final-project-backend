<?php

namespace App\Models\PersonalityTest;

use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalityTest\Characteristic;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personality extends Model
{
    use HasFactory;

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class, 'personalityId', 'id');
    }
}
