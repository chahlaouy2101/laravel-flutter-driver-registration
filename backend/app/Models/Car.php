<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'brand', 'model', 'year', 'plate_letter_right', 'plate_letter_middle', 'plate_letter_left',
        'plate_number', 'plate_type', 'sequence_number', 'seats', 'car_category_status_id', 'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}