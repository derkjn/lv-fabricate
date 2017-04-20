<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scanner extends Model
{
    protected $fillable = [
        'name',
        'type',
        'resolution',
        'materials',
        'health_safety',
        'hi_res',
        'low_res',
    ];

    public function prices()
    {
        return $this->morphMany('App\Price', 'model');
    }
}
