@extends('layouts.admin')


@section('content')

    <h1>Locations</h1>

    <div class="col-sm-6">

        {!! Form::model($locations, ['method'=>'PATCH', 'action'=>['AdminLocationsController@update', $locations->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Update Location', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}



        <br>

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminLocationsController@destroy', $locations->id]]) !!}

        {!! Form::submit('Delete Location', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    </div>

@endsection