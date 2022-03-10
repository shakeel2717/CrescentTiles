<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product extends Component
{
    public $name;
    public $img;
    public $id;
    public $path;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$img,$id,$path)
    {
        $this->name = $name;
        $this->img = $img;
        $this->id = $id;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
