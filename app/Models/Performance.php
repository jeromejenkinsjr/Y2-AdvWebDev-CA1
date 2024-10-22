<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    // Define the fillable fields if you want to protect against mass assignment issues.
    protected $fillable = [
        'event_id',
        'musician_id',
        'composer',
        'piece',
        'duration',
        'image',
    ];
}
