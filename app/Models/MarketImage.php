<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class MarketImage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'extension',
      'market_id',
    ];

    public function market()
    {
      return $this->belongsTo(Market::class);
    }
}
