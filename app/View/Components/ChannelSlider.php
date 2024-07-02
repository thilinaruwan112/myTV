<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChannelSlider extends Component
{

    public $channels;
    /**
     * Create a new component instance.
     */
    public function __construct($channels)
    {
        $this->channels = $channels;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.channel-slider');
    }
}
