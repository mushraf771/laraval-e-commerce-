<?php

namespace App\Models;

use App\Enums\ProductSize as EnumsProductSize;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['product_id',  'size','status'];
    protected $casts = [
        // 'quantity'  =>  'integer',
        // 'brand_id'  =>  'integer',
        // 'subcategory_id'  =>  'integer',
        // 'status'    =>  'boolean',
        // 'featured'  =>  'boolean',
        'status'=> Status::class,
        'size'=> EnumsProductSize::class,
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
