<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missioner extends Model
{
    protected $fillable = [
        'firstname','lastname','email', 'contact'
    ];
}
