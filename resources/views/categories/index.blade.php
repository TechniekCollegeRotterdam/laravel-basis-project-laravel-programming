@extends('layouts.layout')

@section('content')

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="mt-5">Categories</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link active">Index</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Category details</th>
                <th scope="col">Edit category</th>
                <th scope="col">Delete category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('categories.show', ['category' => $category->id]) }}">Details</a></td>
                    <td><a href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a></td>
                    <td><a href="{{ route('categories.delete', ['category' => $category->id]) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
