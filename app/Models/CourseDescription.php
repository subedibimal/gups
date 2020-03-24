<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseDescription extends Model
{
    protected $fillable=['course_id','description'];

    public function courses()
    {
        return $this->belongsTo('App\Models\Course','course_id');
    }
}
