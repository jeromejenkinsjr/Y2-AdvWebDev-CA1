<div class="border rounded-lg shadow-md p-6 bg-white hover: shadow-lg transition duration-300">
<h4 class="font-bold text-lg">{{ $piece }}</h4>
<img src="{{asset( 'images/pieces/' . $image)}}" alt="{{$piece}}">
<p class="text-gray-600">by {{ $composer }}</p>
<p class="text-gray-800 mt-4">{{ $duration }}</p>
</div>