<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
      'dateOfDeal'
    ];

    //Create Eloquent relations
    public function realtys()
    {
      return $this->hasMany(Realty::class);
    }

    public function realtors()
    {
      return $this->hasMany(Realtor::class);
    }

    public function services()
    {
      return $this->hasMany(Service::class);
    }
}
