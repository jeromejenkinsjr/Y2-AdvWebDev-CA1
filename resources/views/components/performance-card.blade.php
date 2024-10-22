@props(['piece', 'composer', 'duration', 'image', 'id'])

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
    @if($image)
        <img src="{{ asset($image) }}" 
             alt="{{ $piece }}" 
             class="w-full object-cover" style="aspect-ratio: 1 / 1;">
    @else
        <div class="w-full h-64 flex items-center justify-center bg-gray-200">
            <span class="text-gray-500">No image available</span>
        </div>
    @endif
    
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $piece }}</div>
        <p class="text-gray-700 text-base">
            Composer: {{ $composer }}
        </p>
        <p class="text-gray-600 text-sm mb-4">
            Duration: {{ $duration }}
        </p>
    </div>

    <div class="px-6 py-4 flex justify-between">
        <a href="{{ route('performances.show', $id) }}" class="text-blue-500 hover:underline">View</a>
        <a href="{{ route('performances.edit', $id) }}" class="text-yellow-500 hover:underline">Edit</a>
        <form action="{{ route('performances.destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this performance?')">Delete</button>
        </form>
    </div>
</div>