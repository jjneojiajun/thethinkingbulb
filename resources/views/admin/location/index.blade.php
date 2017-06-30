@extends('layouts.admin')



@section('content')

    <h1>Level</h1>

    <br>
    <br>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminLevelsController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Level', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($levels)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($levels as $level)

                    <tr>
                        <td>{{  $level->id   }}</td>
                        <td><a href="{{ route('admin.levels.edit', $level->id)  }}">{{  $level->name  }}</a></td>
                        <td>{{  $level->created_at ? $level->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif

    </div>



@endsection