<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AssignmentsCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //

            'title' => 'required',
            'level_id' => 'required',
            'subject_id' => 'required',
            'no_of_lesson_per_month' => 'required',
            'no_of_hour_per_lessons' => 'required',
            'gender_pref' => 'required',
            'qualification_id' => 'required',
            'race_id' => 'required',
            'hourly_budget' => 'required',
            'available_timeslot' => 'required',
            'commence_date' => 'required',
            'period_require_tutor' => 'required',

        ];
    }
}
