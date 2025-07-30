<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    //fillble
    protected $fillable = [
        'ip',
        'user_agent',
        'url',
    ];
}
