<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table = "tours";
    
    protected $primaryKey = "id";
   
    public $timestamps = false;
}
