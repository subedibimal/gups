<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    protected $fillable=['title','description','start','end','location','no_of_days','featured_image','date','event'];


}
