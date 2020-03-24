<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterDescription extends Model
{
    protected $fillable=['title', 'description'];
    public $table = 'footer_description';
}
