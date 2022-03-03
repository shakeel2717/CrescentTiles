<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gallery extends Component
{
    public $img;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $name)
    {
        $this->img = $img;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery');
    }
}
