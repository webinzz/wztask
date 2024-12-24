<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goal extends Model
{
    protected $fillable = [
        'target_value',
        'current_value',
        'current_persen',
        'timeline',
        'status',
        'image'
    ];

}
