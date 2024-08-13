<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $product_id
 * @property string $weight
 * @property string $dimensions
 * @property string $shipping_class
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 */
class ProductShipping extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'weight', 'dimensions', 'shipping_class', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
