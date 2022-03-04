<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Edit extends Component
{
    public string $title;
    public string $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $action)
    {
        $this->title = $title;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit');
    }
}
