@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Books</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('books.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Add</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">Category</th>
            <th scope="col">Product details</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td scope="row">{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->category->name }}</td>
                <td><a href="{{ route('books.show', ['book' => $book->id]) }}">Details</a></td>
                <td><a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a></td>
                <td><a href="{{ route('books.delete', ['book' => $book->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $books->links('vendor/pagination/bootstrap-4', ['elements' => $books]) }}
@endsection
