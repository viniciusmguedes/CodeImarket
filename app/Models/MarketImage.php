<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class MarketImage extends Model
{
  protected $fillable = [
    'extension',
    'market_id',
  ];

  public function market()
  {
    return $this->belongsTo(Market::class);
  }
}
