<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //

    protected $fillable = [

      'user_id', 'level_id', 'subject_id', 'title', 'no_of_lessons_per_month',
        'no_of_hour_per_lessons', 'gender_pref', 'qualification_id', 'race_id', 'hourly_budget',
        'available_timeslot', 'commence_date', 'period_require_tutor'

    ];

    public function level(){

        return $this->belongsTo('App\Level');

    }

    public function subject(){

        return $this->belongsTo('App\Subject');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function race(){

        return $this->belongsTo('App\Race');

    }

    public function qualification(){

        return $this->belongsTo('App\Qualification');

    }

}
