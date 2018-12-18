<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    protected $fillable = [
      'numberOfRooms',
      'totalArea',
      'floor',
      'floors',
      'price',
      'descript',
      'city',
      'numberHouse',
      'apartment',
      'status'
    ];

    public function deals()
    {
      return $this->hasMany(Deal::class);
    }

    public function client()
    {
      return $this->belongsTo(Client::class);
    }

    public function object()
    {
      return $this->belongsTo(Object::class);
    }

    public function house()
    {
      return $this->belongsTo(House::class);
    }

    public function property()
    {
      return $this->belongsTo(Property::class);
    }
}
