<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "categories_products");
    }
}
