<?php

namespace App\Models\VarkTest;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VarkQuestions extends Model
{
    use HasFactory;
    public function answers()
    {
        return $this->hasMany(VarkAnswers::class, 'questionId', 'id');
    }
}
