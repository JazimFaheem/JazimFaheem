<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use URL;

/**
 * @property integer $id
 * @property integer $product_id
 * @property string $images
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 */
class ProductImage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'images', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    
}
