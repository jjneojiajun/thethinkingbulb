@extends('layouts.admin')



@section('content')

    <h1>Subject</h1>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminSubjectsController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Subjects', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($subjects)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($subjects as $subject)

                    <tr>
                        <td>{{  $subject->id   }}</td>
                        <td><a href="{{ route('admin.subjects.edit', $subject->id)  }}">{{  $subject->name  }}</a></td>
                        <td>{{  $subject->created_at ? $subject->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

    @endif

    </div>



@endsection