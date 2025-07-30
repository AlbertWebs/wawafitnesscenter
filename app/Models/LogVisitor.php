<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogVisitor extends Model
{
    //fillble
    protected $fillable = [
        'ip',
        'user_agent',
        'url',
    ];
}
