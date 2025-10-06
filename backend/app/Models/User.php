<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'gender', 'identity', 'email', 'phone', 'password', 'birth_date',
    ];

    protected $hidden = ['password'];

    public function car()
    {
        return $this->hasMany(Car::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}