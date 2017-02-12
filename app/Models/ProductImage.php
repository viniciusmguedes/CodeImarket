<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProductImage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'extension',
      'product_id',
    ];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }
}
