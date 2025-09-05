<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMateri extends Component
{
    public $title;
    public $jenis;
    public $bab;
    public $durasi;

    public function __construct(
        $title,
        $jenis,
        $bab,
        $durasi,
    )
    {
        $this->title=$title
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-materi');
    }
}
