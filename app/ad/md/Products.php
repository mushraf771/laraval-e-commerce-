<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'brand_id', 'sku', 'name', 'slug', 'description', 'quantity',
        'weight', 'price', 'sale_price', 'status', 'featured',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'quantity'  =>  'integer',
        'brand_id'  =>  'integer',
        'status'    =>  'boolean',
        'featured'  =>  'boolean'
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class);
    // }

    // public function images()
    // {
    //     return $this->hasMany(ProductImage::class);
    // }
    // public function attributes()
    // {
    //     return $this->hasMany(ProductAttribute::class);
    // }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
}
