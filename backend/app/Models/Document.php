<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'user_id', 'identity_document', 'car_license', 'car_application',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}