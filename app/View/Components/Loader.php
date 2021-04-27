<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Loader extends Component
{
    public $targets;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($targets)
    {
        $this->targets = $targets;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.loader');
    }
}
