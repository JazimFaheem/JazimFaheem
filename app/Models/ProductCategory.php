<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property integer $product_id
 * @property string $category_id
 * @property string $sub_category_id
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 */
class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'category_id', 'sub_category_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    

}
