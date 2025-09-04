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

    public function __construct(
    string $image,
    string $tag,
    string $time,
    string $title,
    string $description
) {
    $this->image = $image;
    $this->tag = $tag;
    $this->time = $time;
    $this->title = $title;
    $this->description = $description;
}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
