<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'name',
        'date',
        'checkin',
        'checkout',
    ];
    use HasFactory;
}
