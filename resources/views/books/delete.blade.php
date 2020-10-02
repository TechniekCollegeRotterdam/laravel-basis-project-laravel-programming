@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Books</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.delete', ['book' => $book->id]) }}">
                    Delete Book
                </a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('books.destroy', ['book' => $book->id]) }}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="name">Book title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="booktitleHelp"
                   value="{{ $book->title }}" disabled="disabled"
            >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control" disabled="disabled">
                {{ $book->description }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="price">ISBN</label>
            <input type="text" name="isbn" class="form-control" id="isbn" aria-describedby="isbnHelp"
                   value="{{ $book->isbn }}" disabled="disabled"
            >
        </div>
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
