<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Market extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
      'user_id',
      'phone',
      'address',
      'city',
      'state',
      'postcode',
    ];

    public function user()
    {
      return $this->hasOne(User::class);
    }
}
