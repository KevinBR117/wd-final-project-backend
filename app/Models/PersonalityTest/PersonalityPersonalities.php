<?php

namespace App\Models\PersonalityTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityPersonalities extends Model
{
    use HasFactory;

    public function characteristics()
    {
        return $this->hasMany(PersonalityCharacteristic::class, 'personalityId', 'id');
    }
}
