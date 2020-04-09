<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'cartId';
}
