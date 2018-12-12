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

    public function deal()
    {
      return $this->belongsTo(Deal::class);
    }

    public function clients($value='')
    {
      return $this->hasMany(Client::class);
    }

    public function objects()
    {
      return $this->hasMany(Object::class);
    }

    public function house_types()
    {
      return $this->hasMany(House_Type::class);
    }

    public function property_types()
    {
      return $this->hasMany(Property_Type::class);
    }
}
