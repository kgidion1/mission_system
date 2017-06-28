<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class church_member extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'church', 'contact'
    ];
}
