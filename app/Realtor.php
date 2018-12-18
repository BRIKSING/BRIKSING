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

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function deals()
    {
      return $this->hasMany(Deal::class);
    }
}
