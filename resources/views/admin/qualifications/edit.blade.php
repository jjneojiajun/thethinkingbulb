@extends('layouts.admin')


@section('content')

    <h1>Locations</h1>

    <div class="col-sm-6">

        {!! Form::model($qualifications, ['method'=>'PATCH', 'action'=>['AdminQualificationsController@update', $qualifications->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Update Qualification', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}



        <br>

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminQualificationsController@destroy', $locations->id]]) !!}

        {!! Form::submit('Delete Qualification', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    </div>

@endsection