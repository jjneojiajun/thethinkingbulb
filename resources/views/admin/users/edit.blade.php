@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>

    <div class="row">

        @include('includes.form_error')

    </div>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{$users->photo ? $users->photo->file : "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded"/>

        </div>

        <div class="col-sm-9">


            {!! Form::model($users, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $users->id], 'files'=>true]) !!}

            {{csrf_field()}}

            <div class="form-group">

                {!! Form::label('title', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('photo_id', 'File:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

            </div>


            <div class="form-group">

                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}

            </div>

            {!! Form::submit('Edit User', ['class'=>'btn btn-primary col-sm-3']) !!}

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $users->id]]) !!}

            <div class="form-group">

                {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-3']) !!}

            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection