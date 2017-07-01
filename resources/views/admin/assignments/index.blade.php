@extends('layouts.admin')



@section('content')

    <h1>Assignments</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subject</th>
            <th>Owner</th>
            <th>Level</th>
            <th>Created At</th>
            <th>Updated At</th>

          </tr>
        </thead>
        <tbody>

        @if($assignments)


            @foreach($assignments as $assignment)
          <tr>
            <td>{{ $assignment->id }}</td>
              <td><a href="{{ route('admin.assignments.edit', $assignment->id) }}">{{ $assignment->title }}</a></td>
            <td>{{ $assignment->subject->name }}</td>
            <td>{{ $assignment->user->name }}</td>
            <td>{{ $assignment->level->name }}</td>
            <td>{{ $assignment->created_at->diffForHumans() }}</td>
            <td>{{ $assignment->updated_at->diffForHumans() }}</td>

          </tr>

            @endforeach

        @endif
        </tbody>
      </table>

@endsection