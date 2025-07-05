<?php

namespace App\View\Components\logos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class datingtextbot extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
          public string $logoid,
        public string $width,
        public string $height,
    )
    {
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.logos.datingtextbot');
    }
}
