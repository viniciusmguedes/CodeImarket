<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
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
