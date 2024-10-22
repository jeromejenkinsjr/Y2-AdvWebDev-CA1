@props(['piece', 'composer', 'duration', 'image', 'id'])

<div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg overflow-hidden mt-6">
    @if($image)
        <img src="{{ asset($image) }}" alt="{{ $piece }}" class="w-full h-64 object-cover">
    @else
        <div class="w-full h-64 flex items-center justify-center bg-gray-200">
            <span class="text-gray-500">No image available</span>
        </div>
    @endif

    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $piece }}</h2>
        <p class="text-gray-700 text-lg mb-1"><strong>Composer:</strong> {{ $composer }}</p>
        <p class="text-gray-600 text-sm mb-4"><strong>Duration:</strong> {{ $duration }}</p>

        <div class="flex justify-between mt-4">
            <a href="{{ route('performances.edit', $id) }}" class="text-yellow-500 hover:text-yellow-600 font-semibold">Edit</a>
            <form action="{{ route('performances.destroy', $id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-600 font-semibold" onclick="return confirm('Are you sure you want to delete this performance?')">Delete</button>
            </form>
        </div>
    </div>
</div>