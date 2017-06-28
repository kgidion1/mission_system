<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mission_coordinator extends Model
{
    protected $table = 'mission_coordinator';

    protected $fillable = [
        'firstname', 'lastname', 'church', 'contact'
    ];
}
