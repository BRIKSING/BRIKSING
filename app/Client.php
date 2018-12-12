<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'firstName',
      'lastName',
      'patronomyc',
      'dateOfBirth',
      'telephone',
      'address'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
