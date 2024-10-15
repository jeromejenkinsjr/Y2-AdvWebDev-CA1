<!-- resources/views/performances/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Performances</h1>

    @if($performances->isEmpty())
        <p>No performances available.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event ID</th>
                    <th>Musician ID</th>
                    <th>Composer</th>
                    <th>Piece</th>
                    <th>Duration</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($performances as $performance)
                    <tr>
                        <td>{{ $performance->performance_id }}</td>
                        <td>{{ $performance->event_id }}</td>
                        <td>{{ $performance->musician_id }}</td>
                        <td>{{ $performance->composer }}</td>
                        <td>{{ $performance->piece }}</td>
                        <td>{{ $performance->duration }}</td>
                        <td>
                            @if($performance->image)
                                <img src="{{ asset($performance->image) }}" alt="{{ $performance->piece }}" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('performances.show', $performance->performance_id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('performances.edit', $performance->performance_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('performances.destroy', $performance->performance_id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this performance?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links, if using pagination in the controller -->
        {{ $performances->links() }}
    @endif
</div>
@endsection
