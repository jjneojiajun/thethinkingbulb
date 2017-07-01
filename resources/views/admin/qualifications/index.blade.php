@extends('layouts.admin')



@section('content')

    <h1>Qualification</h1>

    <br>
    <br>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminQualificationsController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Qualification', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($qualifications)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($qualifications as $qualification)

                    <tr>
                        <td>{{  $qualification->id   }}</td>
                        <td><a href="{{ route('admin.locations.edit', $qualification->id)  }}">{{  $qualification->name  }}</a></td>
                        <td>{{  $qualification->created_at ? $qualification->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif

    </div>



@endsection