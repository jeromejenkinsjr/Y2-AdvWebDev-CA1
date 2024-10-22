<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PerformanceCard extends Component
{
    public string $piece;
    public string $composer;
    public string $duration;
    public ?string $image; // Change to nullable string
    public int $id; // Rename from performanceId to id

    /**
     * Create a new component instance.
     */
    public function __construct(string $piece, string $composer, string $duration, ?string $image, int $id) // Make $image nullable
    {
        $this->piece = $piece;
        $this->composer = $composer;
        $this->duration = $duration;
        $this->image = $image;
        $this->id = $id; // Change from performance_id to id
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.performance-card');
    }
}
