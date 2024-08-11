<!-- resources/views/things/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Things</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Warranty</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($things as $thing)
                <tr>
                    <td>{{ $thing->name }}</td>
                    <td>{{ $thing->description }}</td>
                    <td>{{ $thing->warranty }}</td>
                    <td>
                        <a href="{{ route('things.edit', $thing->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('things.destroy', $thing->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
