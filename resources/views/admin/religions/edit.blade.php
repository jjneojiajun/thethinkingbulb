@extends('layouts.admin')


@section('content')

    <h1>Religions</h1>

    <div class="col-sm-6">

        {!! Form::model($religions, ['method'=>'PATCH', 'action'=>['AdminReligionsController@update', $religions->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Update Religion', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}



        <br>

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminReligionsController@destroy', $religions->id]]) !!}

        {!! Form::submit('Delete Religions', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    </div>

@endsection