<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PerformanceCard extends Component
{
    public function __construct($performance)
    {
        $this->performance = $performance;
    }

    public function render()
    {
        return view('components.performance-card');
    }
}