<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class OfferItem extends Model implements Transformable
{
    use TransformableTrait;

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
