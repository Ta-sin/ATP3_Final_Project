<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banquet extends Model
{
    //
    protected $table = "banquets";
    
    protected $primaryKey = "bid";
   
    public $timestamps = false;
}
