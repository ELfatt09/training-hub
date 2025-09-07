<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $training;

    public function __construct($training)
    {
        $this->training = $training;
    }

    public function render()
    {
        return view('components.card');
    }
}