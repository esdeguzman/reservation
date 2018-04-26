<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('branch_course_id');
            $table->unsignedInteger('added_by');
            $table->unsignedInteger('deleted_by')->nullable();
            $table->string('start_date');
            $table->string('end_date');
            $table->tinyInteger('days');
            $table->string('start_time');
            $table->string('end_time');
            $table->unsignedSmallInteger('minutes');
            $table->unsignedTinyInteger('learning_station');
            $table->unique(['branch_course_id', 'start_date', 'end_date', 'learning_station'], 'cls');
            $table->softDeletes();
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
        Schema::dropIfExists('schedules');
    }
}
