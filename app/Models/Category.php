<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'category_attributes')->withPivot('mandatory');
    }

    // Function to attach attributes to a category
    public function attachAttributes(array $attributeIds, array $mandatoryFlags)
    {
        $attributesToAttach = [];
        foreach ($attributeIds as $index => $attributeId) {
            $mandatory = $mandatoryFlags[$index] ?? false;
            $attributesToAttach[$attributeId] = ['mandatory' => $mandatory];
        }

        $this->attributes()->sync($attributesToAttach);
    }
}
