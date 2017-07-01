@extends('layouts.admin')


@section('content')

    <h1>Race</h1>

    <div class="col-sm-6">

        {!! Form::model($races, ['method'=>'PATCH', 'action'=>['AdminRacesController@update', $races->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Update Race', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}



        <br>

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRacesController@destroy', $races->id]]) !!}

        {!! Form::submit('Delete Race', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    </div>

@endsection