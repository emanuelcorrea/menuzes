<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class ItemAdd extends Component
{
    /**
     * @var array
     */
    public $section;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($section)
    {
        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.item-add');
    }
}
