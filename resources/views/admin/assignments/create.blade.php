@extends('layouts.admin')




@section('content')

    <h1>Create Assignments</h1>

    <div class="row">
        @include('includes.form_error')
    </div>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminAssignmentController@store']) !!}

        <div class="form-group">

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('level_id', 'Level:') !!}
            {!! Form::select('level_id', ['' => 'Choose Level'] + $levels, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('subject_id', 'Subject:') !!}
            {!! Form::select('subject_id', ['' => 'Choose Subject'] + $subjects, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('no_of_lesson_per_month', 'Number of Lesson Per Month') !!}
            {!! Form::text('no_of_lesson_per_month', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('no_of_hour_per_lessons', 'Number of Hour Per Lessons') !!}
            {!! Form::text('no_of_hour_per_lessons', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('gender_pref', 'Gender Preference') !!}
            {!! Form::text('gender_pref', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('qualification_id', 'Qualification:') !!}
            {!! Form::select('qualification_id',['' => 'Choose Your Qualification'] + $qualifications ,null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label('race_id', 'Race:') !!}
            {!! Form::select('race_id', ['' => 'Choose Your Race'] + $races, null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label('hourly_budget', 'Hourly Budget:') !!}
            {!! Form::text('hourly_budget', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('available_timeslot', 'Available Timeslot:') !!}
            {!! Form::text('available_timeslot', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('commence_date', 'Commencement Date:') !!}
            {!! Form::text('commence_date', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('period_require_tutor', 'Period Require Tutor:') !!}
            {!! Form::text('period_require_tutor', null, ['class'=>'form-control']) !!}

        </div>

    {!! Form::submit('Create Assignment', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection