<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
      'dateOfDeal',
      'realty_id',
      'service_id'
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
