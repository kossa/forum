@extends('layouts.app')

@section('content')
    <article class="bg-primary text-white p-4 mb-4">
      <h3>{{ $category->name }}: {{ $question->name }}</h3>
    
      <p>{{ $question->body }}</p>
    </article>

    @foreach ($question->answers as $answer)
      <article class="bg-dark text-white p-4 mb-4">
        <p><strong>{{ $answer->user->name }}</strong>: {{ $answer->body }}</p>
      </article>
    @endforeach

@endsection