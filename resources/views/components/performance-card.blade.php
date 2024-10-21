@props(['performance'])

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
    <img src="{{ $performance->image ? asset($performance->image) : asset('default-image.jpg') }}" 
         alt="{{ $performance->piece }}" 
         class="w-full object-cover" style="aspect-ratio: 1 / 1;">
    
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $performance->piece }}</div>
        <p class="text-gray-700 text-base">
            Composer: {{ $performance->composer }}
        </p>
        <p class="text-gray-600 text-sm mb-4">
            Duration: {{ $performance->duration }}
        </p>
    </div>

    <div class="px-6 py-4 flex justify-between">
        <a href="{{ route('performances.show', $performance->performance_id) }}" class="text-blue-500 hover:underline">View</a>
        <a href="{{ route('performances.edit', $performance->performance_id) }}" class="text-yellow-500 hover:underline">Edit</a>
        <form action="{{ route('performances.destroy', $performance->performance_id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this performance?')">Delete</button>
        </form>
    </div>
</div>