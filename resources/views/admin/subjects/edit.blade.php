@extends('layouts.admin')


@section('content')

    <h1>Subjects</h1>

    <div class="col-sm-6">

        {!! Form::model($subjects, ['method'=>'PATCH', 'action'=>['AdminSubjectsController@update', $subjects->id]]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Update Subject', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}



        <br>

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminSubjectsController@destroy', $subjects->id]]) !!}

        {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    </div>

@endsection