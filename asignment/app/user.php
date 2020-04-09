<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //protected $table = "user_table";
    public $timestamps = false;
    protected $primaryKey = 'id';
}
