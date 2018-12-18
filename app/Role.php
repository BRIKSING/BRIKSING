<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
      'roleName'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
