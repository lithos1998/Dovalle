<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Service extends Component
{

    public $services;
    public $condition;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($services, $condition)
    {
        $this->services = $services;
        $this->condition = $condition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service');
    }
}
