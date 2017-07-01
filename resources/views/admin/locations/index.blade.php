@extends('layouts.admin')



@section('content')

    <h1>Location</h1>

    <br>
    <br>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminLocationsController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        {!! Form::submit('Create Level', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        @if($locations)

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($locations as $location)

                    <tr>
                        <td>{{  $location->id   }}</td>
                        <td><a href="{{ route('admin.locations.edit', $location->id)  }}">{{  $location->name  }}</a></td>
                        <td>{{  $location->created_at ? $location->created_at->diffForHumans() : 'no date'    }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        @endif

    </div>



@endsection