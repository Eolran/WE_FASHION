<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
        'product_published',
        'product_state',
        'product_reference',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, "categories_products", null, "category_id");
    }
}
