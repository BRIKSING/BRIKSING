<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    protected $fillable = [
      'descriptionObject'
    ];

    public function realty()
    {
      return $this->belongsTo(Realty::class);
    }
}
