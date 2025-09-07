<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMateri extends Component
{
    public $title;
    public $bab;
    public $materi;
    public $accordionid;

    public function __construct(
        $title,
        $bab,
        $materi,
        $accordionid
    )
    {
        $this->title=$title;
        $this->bab=$bab;
        $this->materi=$materi;
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
