<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class AddFields extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size',
        'color',
        'brand',
        'composition',
        'count',
        'seo_h1',
        'seo_description',
        'weight',
        'width',
        'height',
        'length',
        'package_weight',
        'package_width',
        'package_height',
        'package_length',
        'category',
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
