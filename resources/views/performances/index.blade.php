@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Performances</h1>

    @if($performances->isEmpty())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">No performances available.</strong>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($performances as $performance)
    <x-performance-card 
        :piece="$performance->piece" 
        :composer="$performance->composer" 
        :duration="$performance->duration" 
        :image="$performance->image" 
        :id="$performance->id" /> <!-- Pass the id here -->
@endforeach


        </div>

        <!-- Pagination links -->
        <div class="mt-4">
            {{ $performances->links() }}
        </div>
    @endif
</div>
@endsection
