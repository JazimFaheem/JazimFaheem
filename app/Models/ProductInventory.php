<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $product_id
 * @property string $sku
 * @property string $is_stock_manage
 * @property integer $quantity
 * @property integer $allow_backorders
 * @property integer $low_stock_threshold
 * @property integer $stock_status
 * @property string $is_sold_individually
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 */
class ProductInventory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'sku', 'is_stock_manage', 'quantity', 'allow_backorders', 'low_stock_threshold', 'stock_status', 'is_sold_individually', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
