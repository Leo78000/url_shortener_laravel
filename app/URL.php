<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    public $timestamps = false;
    protected $fillable = ['url','shortened'];
}
