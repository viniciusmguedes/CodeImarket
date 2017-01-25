<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class OfferItem extends Model
{
  protected $fillable = [
    'offer_id',
    'product_id',
    'price',
    'likes',
  ];

  public function offer()
  {
    return $this->belongsTo(Offer::class);
  }

  public function product()
  {
    return $this->belongsTo(Product::class);
  }
}
