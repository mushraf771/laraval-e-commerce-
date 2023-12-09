<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'description', 'category_id', 'featured', 'menu', 'image'
    ];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function categories()
    {
        return $this->belongsTo(category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class,'product_categories', 'category_id', 'product_id');
    }
}
