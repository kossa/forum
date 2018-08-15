@inject('categories', 'App\Category')
@extends('layouts.app')

@section('content')
    <h2>Creer une question</h2>

    <form action="{{ route('question.store') }}" class="form row" method="POST">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <div class="form-group">
                <select name="category_id" id="" class="form-control">
                    <option value="">Choisissez une categorie ...</option>
                    @foreach ($categories->all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Question">
            </div>
            <div class="form-group">
                <textarea name="body" rows="6" class="form-control" placeholder="Contenu ..."></textarea>
            </div>

            <button class="btn btn-info">Ajouter</button>
        </div>
        
    </form>
@endsection