<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name',
    'category_id',
    'description',
  ];

  public function category()
  {
      return $this->belongsTo(Category::class);
  }

  public function images()
  {
      return $this->hasMany(ProductImage::class);
  }
}
