<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 'church_details';  // church_details

    protected $fillable = [
        'church','parish','archdeaconry',
    ];
}
