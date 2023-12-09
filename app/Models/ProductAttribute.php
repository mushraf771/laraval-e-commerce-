<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;
use App\Enums\ProductSize;
class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'quantity', 'price','color','size','status'];

    protected $casts = [
        'quantity'  =>  'integer',
        'status'=> Status::class,
        // 'size'=> ProductSize::class,
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function colors()
    {
        return $this->belongsTo(ProductColors::class);
    }
    public function size()
    {
        return $this->belongsTo(ProductColors::class);
    }
//     public function attributesValues()
// {
//     return $this->belongsToMany(AttributeValue::class);
// }
}
