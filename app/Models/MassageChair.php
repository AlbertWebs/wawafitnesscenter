<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MassageChair extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'hiring_price', 'selling_price', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(MassageChairImage::class);
    }
}
