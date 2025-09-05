<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $image;
    public $tag;
    public $title;
    public $time;
    public $description;

    public function __construct($image, $title, $description, $tag)
    {
        $this->image=$image;
        $this->title=$title;
        $this->time=$time;
        $this->description=$description;
        $this->tag=$tag;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
