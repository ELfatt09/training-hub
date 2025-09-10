<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMateri extends Component
{
    public $section;
    public $index;
    public $accordionid;

    public function __construct(
        $section,
        $index,
        $accordionid
    )
    {
        $this->section=$section;
        $this->index=$index;
        $this->accordionid=$accordionid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-materi');
    }
}
