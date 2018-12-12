<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Type extends Model
{
    protected $fillable = [
      'descriptionType'
    ];

    public function realty()
    {
      return $this->belongsTo(Realty::class);
    }
}
