<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MassageChairImage extends Model
{
    use HasFactory;

    protected $fillable = ['massage_chair_id', 'image_path'];

    public function massageChair()
    {
        return $this->belongsTo(MassageChair::class);
    }
}
