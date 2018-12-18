<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  protected $fillable = [
    'descriptionType'
  ];

  public function realty()
  {
    return $this->hasMany(Realty::class);
  }
}
