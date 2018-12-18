<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      'description'
    ];

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
