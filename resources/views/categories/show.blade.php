@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="col-sm-8">
        <h1>{{ $category->name }}</h1>
      </div>
      <div class="col-sm-4">
        <a href="{{ route("question.create") }}" class="btn btn-success float-right">Ajouter un question</a>
      </div>
    </div>
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
        @foreach ($category->questions()->latest()->get() as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td><a href="{{ route('question.show', [$category, $question]) }}">{{ $question->name }}</a></td>
                <td>{{ $question->user->name }}</td>
                <td>{{ $question->since }}</td>
            </tr>
        @endforeach
      </tbody>
  </table>
@endsection