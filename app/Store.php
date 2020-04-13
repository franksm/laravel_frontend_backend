<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    protected $fillable = [
        'sun_open',
        'sun_close',
        'mon_open',
        'mon_close',
        'tue_open',
        'tue_close',
        'wed_open',
        'web_close',
        'thu_open',
        'thu_close',
        'fri_open',
        'fri_close',
        'sat_open',
        'sat_close',
        'address',
        'phone'
    ];
}
