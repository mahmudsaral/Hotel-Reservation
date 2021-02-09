<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'parent',
    ];
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'foreign_key');
    }
    public function children()
    {
        return $this->belongsTo(Category::class,'foreign_key');
    }
}

