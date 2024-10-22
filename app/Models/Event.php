<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'description',
    ];

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }
}