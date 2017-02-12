<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Offer extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'name',
      'market_id',
      'start_date',
      'term_date',
      'status',
    ];

    public function items()
    {
      return $this->hasMany(OfferItem::class);
    }

    public function market()
    {
      return $this->belongsTo(Market::class);
    }
}
