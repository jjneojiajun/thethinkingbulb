@extends('layouts.admin')



@section('content')

    <h1>Religions</h1>

    <br>
    <br>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminReligionsController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Religions', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($religions)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($religions as $religion)

                    <tr>
                        <td>{{  $religion->id   }}</td>
                        <td><a href="{{ route('admin.religions.edit', $religion->id)  }}">{{  $religion->name  }}</a></td>
                        <td>{{  $religion->created_at ? $religion->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif

    </div>



@endsection