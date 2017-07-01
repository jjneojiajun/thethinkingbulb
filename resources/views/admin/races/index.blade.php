@extends('layouts.admin')



@section('content')

    <h1>Race</h1>

    <br>
    <br>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminRacesController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Race', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($races)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($races as $race)

                    <tr>
                        <td>{{  $race->id   }}</td>
                        <td><a href="{{ route('admin.races.edit', $race->id)  }}">{{  $race->name  }}</a></td>
                        <td>{{  $race->created_at ? $race->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif

    </div>



@endsection