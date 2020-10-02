@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="nav-link active">Category details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">{{ $category->name }}</div>
        <div class="card-body">
            <h2 class="card-title">Corresponding books to {{ $category->name }}</h2>

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Isbn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->isbn }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
