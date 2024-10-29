<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{__('All Performances') }}
</h2>
</x-slot>
<div class="py-12">
<div class="max-w-7x1 mx-auto sm:px-6 1g:px-8">
<div class="bg-white overflow-hidden shadow-sm sm: rounded-lg">
<div class="p-6 text-gray-900">
<h3 class="font-semibold text-lg mb-4">List of Performances:</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
@foreach($performances as $performance)
<x-performance-card
:title="$performance->title"
: image="$performance->image"
: composer= "$performance->composer"
:duration="$performance->duration"
/>
@endforeach
</div>
</div>
</div>
</div>
</div>
</x-app-layout>