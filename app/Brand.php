<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'url',
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
