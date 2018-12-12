<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realtor extends Model
{
    protected $fillable = [
      'firstName',
      'lastName',
      'patronomyc',
      'telephone'
    ];

    public function users()
    {
      return $this->hasMany(User::class);
    }

    public function deal()
    {
      return $this->belongsTo(Deal::class);
    }
}
