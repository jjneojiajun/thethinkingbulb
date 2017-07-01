<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('level_id');
            $table->string('subject_id');
            $table->string('title');
            $table->integer('no_of_lessons_per_month');
            $table->string('no_of_hour_per_lessons');
            $table->string('gender_pref');
            $table->string('qualification_id');
            $table->string('race_id');
            $table->string('hourly_budget');
            $table->string('available_timeslot');
            $table->string('commence_date');
            $table->string('period_require_tutor');

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
        Schema::drop('assignments');
    }
}
