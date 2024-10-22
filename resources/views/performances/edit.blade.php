@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Performance</h1>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('performances.update', $performance->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="event_id">Event ID</label>
            <input type="number" name="event_id" id="event_id" class="form-control" value="{{ old('event_id', $performance->event_id) }}" required>
        </div>

        <div class="form-group">
            <label for="musician_id">Musician ID</label>
            <input type="number" name="musician_id" id="musician_id" class="form-control" value="{{ old('musician_id', $performance->musician_id) }}" required>
        </div>

        <div class="form-group">
            <label for="composer">Composer</label>
            <input type="text" name="composer" id="composer" class="form-control" value="{{ old('composer', $performance->composer) }}" required>
        </div>

        <div class="form-group">
            <label for="piece">Piece</label>
            <input type="text" name="piece" id="piece" class="form-control" value="{{ old('piece', $performance->piece) }}" required>
        </div>

        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="time" name="duration" id="duration" class="form-control" value="{{ old('duration', $performance->duration) }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            @if ($performance->image)
                <div class="mb-2">
                    @php
                        // Assuming $performance->image contains just the filename, e.g., 'beethoven_symphony_5.jpg'
                        $imageUrl = asset('images/' . $performance->image);
                    @endphp
                    <img src="{{ $imageUrl }}" alt="Performance Image" class="img-thumbnail" style="width: 150px; height: auto;">
                    <p>Image URL: {{ $imageUrl }}</p> <!-- Debugging line -->
                    <br>
                    <label class="mt-2">
                        <input type="checkbox" name="remove_image" value="1"> Remove existing image
                    </label>
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Performance</button>
    </form>
</div>
@endsection