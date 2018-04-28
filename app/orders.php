<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = ['first','last','product','address','city','state','zip','cardNumber'];
}
