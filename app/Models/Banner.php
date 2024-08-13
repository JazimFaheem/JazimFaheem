<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use URL;

/**
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property string $banner
 * @property string $created_at
 * @property string $updated_at
 */
class Banner extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'url', 'banner', 'created_at', 'updated_at'];

    protected function Banner(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => URL::to('assets/images/banners/'.$value.'')
        );
    }
}
