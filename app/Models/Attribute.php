<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_attributes')->withPivot('mandatory');
    }
}
