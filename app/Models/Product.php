<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use URL;

/**
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $short_description
 * @property string $image
 * @property string $type
 * @property integer $regular_price
 * @property integer $sale_price
 * @property string $sale_start_date
 * @property string $sale_end_date
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property ProductCategory[] $productCategories
 * @property ProductImage[] $productImages
 * @property ProductInventory[] $productInventories
 * @property ProductShipping[] $productShippings
 * @property ProductTag[] $productTags
 * @property ProductVariation[] $productVariations
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'short_description', 'image', 'type', 'regular_price', 'sale_price', 'sale_start_date', 'sale_end_date', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory():BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productimages():HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productInventories():HasMany
    {
        return $this->hasMany(ProductInventory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productShippings()
    {
        return $this->hasMany('App\Models\ProductShipping');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTags()
    {
        return $this->hasMany('App\Models\ProductTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variations():HasMany
    {
        return $this->hasMany(Variation::class);
    }


    protected function Image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => URL::to('assets/images/products/'.$value.'')
        );
    }
}
