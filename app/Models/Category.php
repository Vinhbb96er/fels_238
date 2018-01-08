<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
