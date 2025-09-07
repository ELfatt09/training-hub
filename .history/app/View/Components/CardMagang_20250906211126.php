<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardMagang extends Component
{
   public $logo;
   public $jobdesk;
   public $logo;
   public $logo;
   public $logo;
    public function __construct()
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
