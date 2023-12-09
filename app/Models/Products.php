<?php

namespace App\Models;

use App\Enums\ProductSize;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'brand_id', 'subcategory_id', 'name', 'slug', 'description', 'quantity',
        'color', 'size', 'price', 'sale_price', 'status', 'featured',
    ];
    protected $casts = [
        'quantity'  =>  'integer',
        'brand_id'  =>  'integer',
        'subcategory_id'  =>  'integer',
        'status'    =>  'boolean',
        'featured'  =>  'boolean',
        // 'status'=> TableStatus::class,
        // 'size'=> ProductSize::class,
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this -> hasMany(Post::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
    public function colors()
    {
        return $this->hasMany(ProductColors::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
}
