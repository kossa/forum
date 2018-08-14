@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Question</th>
          <th>User</th>
          <th>Crée le</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category->questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td><a href="#">{{ $question->name }}</a></td>
                <td>{{ $question->user_id }}</td>
                <td>{{ $question->created_at }}</td>
            </tr>
        @endforeach
      </tbody>
  </table>
@endsection