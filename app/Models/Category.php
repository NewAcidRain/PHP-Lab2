<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded = [];

    public function products():\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class, "category_id", "id");

    }
}
