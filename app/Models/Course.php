<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name'];

    public function descriptions()
    {
        return $this->hasOne('App\Models\CourseDescription');
}
}