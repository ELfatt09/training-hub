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
    public $open;
    public $completed;

    public function __construct(
        $section,
        $index,
        $accordionid,
        $open=false,
        $completed=false
    )
    {
        $this->section=$section;
        $this->index=$index;
        $this->accordionid=$accordionid;
        $this->open=$open;
        $this->completed=$completed;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-materi');
    }
}
