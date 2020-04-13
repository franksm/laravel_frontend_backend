<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';

    protected $fillable = [
        'content_1',
        'content_2',
        'image'
    ];
}
