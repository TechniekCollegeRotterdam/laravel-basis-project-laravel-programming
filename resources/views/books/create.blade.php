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
                <a class="nav-link active" href="{{ route('books.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Book title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp"
                   placeholder="Enter book title" value="{{ old('title') }}"
            >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="description">ISBN</label>
            <textarea class="form-control" name="isbn" id="isbn" rows="3">{{ old('isbn') }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if( old('category_id') == $category->id)
                            selected
                        @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
