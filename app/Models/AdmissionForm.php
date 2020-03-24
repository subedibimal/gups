<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionForm extends Model
{
    protected $fillable=['full_name','email','gender','dob','religion','nationality','province','zone',
        'district','municipality','ward','village','parent_name','qualification','home_no',
        'office_no','mobile_no','office_no','afu_symbol_no','submission_no','afu_entrance_score',
        'merit_no','admission_seeking_level','semester','school','level_1','board_1',
        'institution_details_1','passed_year_1','percent_grade_1','remarks_1','level_2',
        'board_2','institution_details_2','passed_year_2','percent_grade_2','remarks_2',
        'level_3','board_3','institution_details_3','passed_year_3','percent_grade_3','remarks_3'];
}
