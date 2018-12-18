<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
  protected $fillable = [
    'descriptionHouse'
  ];

  public function realty()
  {
    return $this->hasMany(Realty::class);
  }
}
