<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatWeOffer extends Model
{
    protected $fillable=['title','description'];
    public $table = 'whatWeOffer';
}
