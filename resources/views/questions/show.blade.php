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
    <hr>
    <form action="{{ route('answer.store') }}" method="POST">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div class="form-group">
            <label>Repondre</label>
            <textarea name="body" id="" rows="4" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Repondre</button>
    </form>

@endsection