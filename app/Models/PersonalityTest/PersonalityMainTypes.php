<?php

namespace App\Models\PersonalityTest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityMainTypes extends Model
{
    use HasFactory;
    public function mainCharacteristics()
    {
        return $this->hasMany(PersonalityMainCharacteristics::class, 'mainTypeId', 'id');
    }
}
