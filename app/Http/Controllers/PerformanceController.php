<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performances = Performance::paginate(10);
        return view('performances.index', compact('performances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('performances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|integer',
            'musician_id' => 'required|integer',
            'composer' => 'required|string|max:255',
            'piece' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        Performance::create($validated);

        return redirect()->route('performances.index')->with('success', 'Performance created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Performance $performance)
    {
        return view('performances.show', compact('performance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Performance $performance)
    {
        return view('performances.edit', compact('performance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Performance $performance)
    {
        $validated = $request->validate([
            'event_id' => 'required|integer',
            'musician_id' => 'required|integer',
            'composer' => 'required|string|max:255',
            'piece' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }

        $performance->update($validated);

        return redirect()->route('performances.index')->with('success', 'Performance updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Performance $performance)
    {
        $performance->delete();
        return redirect()->route('performances.index')->with('success', 'Performance deleted successfully.');
    }
}
