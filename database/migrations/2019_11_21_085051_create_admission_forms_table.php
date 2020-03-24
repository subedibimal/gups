<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('nationality');
            $table->string('religion');
            $table->string('province');
            $table->string('zone');
            $table->string('district');
            $table->string('municipality');
            $table->string('ward');
            $table->string('village');
            $table->string('parent_name');
            $table->string('qualification');
            $table->string('home_no');
            $table->string('mobile_no');
            $table->string('office_no');
            $table->string('afu_symbol_no');
            $table->string('submission_no');
            $table->string('afu_entrance_score');
            $table->string('merit_no');
            $table->string('admission_seeking_level');
            $table->string('semester');
            $table->string('school');
            $table->string('level_1');
            $table->string('board_1');
            $table->string('institution_details_1');
            $table->string('passed_year_1');
            $table->string('percent_grade_1');
            $table->string('remarks_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('board_2')->nullable();
            $table->string('institution_details_2')->nullable();
            $table->string('passed_year_2')->nullable();
            $table->string('percent_grade_2')->nullable();
            $table->string('remarks_2')->nullable();
            $table->string('level_3')->nullable();
            $table->string('board_3')->nullable();
            $table->string('institution_details_3')->nullable();
            $table->string('passed_year_3')->nullable();
            $table->string('percent_grade_3')->nullable();
            $table->string('remarks_3')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admission_forms');
    }
}
