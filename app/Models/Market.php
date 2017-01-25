<?php

namespace CodeIMarket\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
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
