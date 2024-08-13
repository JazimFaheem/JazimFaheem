<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use URL;

/**
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $banner
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property SubCategory[] $SubCategories
 */
class SubCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'image', 'banner', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
  

    protected function Banner(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => URL::to('assets/images/products/subcategories/'.$value.'')
        );
    }
    protected function Image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => URL::to('assets/images/products/subcategories/'.$value.'')
        );
    }

    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function product():HasMany
    {
        return $this->hasMany(Product::class);
    }
    
}
