<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House_Type extends Model
{
  protected $fillable = [
    'descriptionHouse'
  ];

  public function realty()
  {
    return $this->belongsTo(Realty::class);
  }
}
