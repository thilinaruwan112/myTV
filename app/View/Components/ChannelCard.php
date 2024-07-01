<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChannelCard extends Component
{
    public $channelId;
    public $defaultName;
    public $link;
    public $key;
    public $kid;
    public $posterImg;
    public $channelKey;

    /**
     * Create a new component instance.
     */
    public function __construct($channelId, $defaultName, $link, $key, $kid, $posterImg, $channelKey)
    {
        $this->channelId = $channelId;
        $this->defaultName = $defaultName;
        $this->link = $link;
        $this->key = $key;
        $this->kid = $kid;
        $this->posterImg = $posterImg;
        $this->channelKey = $channelKey;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.channel-card');
    }
}
