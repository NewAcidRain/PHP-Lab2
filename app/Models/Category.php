<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded = [];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "category_id", "id");

    }

    public function parent(): belongsToMany
    {
        return $this->belongsToMany(Category::class, 'categories', 'category_id');
    }
}
