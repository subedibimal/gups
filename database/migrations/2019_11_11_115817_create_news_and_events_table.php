<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsAndEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_and_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('featured_image')->nullable();
            $table->string('date');
            $table->string('start');
            $table->string('end');
            $table->string('no_of_days');
            $table->text('description');
            $table->string('location');
            $table->enum('event',['holiday','activities','regular']);
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
        Schema::dropIfExists('news_and_events');
    }
}
