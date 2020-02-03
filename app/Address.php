<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = "Address";
    public $timestamps = false;
    protected $fillable = [
        'cell',
        'country',
        'district',
        'province',
        'sector'
    ];

}
