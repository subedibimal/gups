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
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            // $table->string('email');
            $table->string('gender');
            $table->string('dob_bs');
            $table->string('dob_ad');
            $table->string('nationality');
            $table->string('religion');
            // $table->string('province');
            // $table->string('zone');
            // $table->string('district');
            // $table->string('municipality');
            // $table->string('ward');
            // $table->string('village');
            $table->string('blood_group');
            $table->string('address');
            $table->string('admission_seeking_as');
            $table->string('parent_name');
            $table->string('home_no');
            $table->string('mobile_no');
            $table->string('office_no');
            $table->string('bus_stop');
            $table->string('percent');
            $table->string('reason');
            $table->string('extra_curricular')->nullable();
            $table->string('admission_seeking_level');
            $table->string('school');
            $table->string('board_1');
            $table->string('full_marks_1');
            $table->string('obtained_marks_1');
            $table->string('remarks_1');
            $table->string('full_marks_2')->nullable();
            $table->string('obtained_marks_2')->nullable();
            $table->string('remarks_2')->nullable();
            $table->string('full_marks_3')->nullable();
            $table->string('obtained_marks_3')->nullable();
            $table->string('remarks_3')->nullable();
            $table->string('full_marks_4')->nullable();
            $table->string('obtained_marks_4')->nullable();
            $table->string('remarks_4')->nullable();
            $table->string('total_obtained_marks')->nullable();
            $table->string('total_marks')->nullable();
            // $table->boolean('status')->default(1);
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
