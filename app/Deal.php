<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
      'dateOfDeal'
    ];

    //Create Eloquent relations
    public function realty()
    {
      return $this->belongsTo(Realty::class);
    }

    public function realtor()
    {
      return $this->belongsTo(Realtor::class);
    }

    public function service()
    {
      return $this->belongsTo(Service::class);
    }

    public function client()
    {
      return $this->belongsTo(Client::class);
    }
}
