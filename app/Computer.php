<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'id','come_name', 'com_serail','com_ristax','com_ip','brand','gen',
    ];
}
