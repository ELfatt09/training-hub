<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMagang extends Component
{
   public $logo;
   public $jobdesk;
   public $perusahaan;
   public $lokasi;
   public $tanggalHabis;
    public function __construct(
        $logo,
        $jobdesk,
        $perusahaan,
        $logo,
        $logo,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-magang');
    }
}
