<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
      'name',
      'website',
      'address',
      'city',
      'state',
      'country',
      'email',
      'skype',
      'facebook',
      'instagram',
      'pinterest',
      'linkedin',
      'notes',
      'hi_res',
      'low_res',
    ];
}
