<?php

<<<<<<< HEAD:app/Models/VarkTest.php
namespace App\Models;

=======
namespace App\Models\VarkTest;

use App\Models\Users;
>>>>>>> 2ac8870 (improve all the backend controllers, seeders, etc.):app/Models/VarkTest/VarkTest.php
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
