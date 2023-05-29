<?php

namespace App\Models;

//use App\Models\VarkTest\varkTest;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
//    use HasApiTokens, Notifiable;

//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function varkTest()
    {
        return $this->hasOne(VarkTest::class, 'email', 'email');
    }

    
}
