<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
  protected $fillable = [
    'extension',
    'product_id',
  ];

  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
