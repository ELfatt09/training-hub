<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $pelajaran;
    public $status;
    public $harga;
    public $deskripsi;

    public function __construct($title, $image, $pelajaran, $status, $harga, $deskripsi)
    {
        $this->title = $title;
        $this->image = $image;
        $this->pelajaran = $pelajaran;
        $this->status = $status;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }

    public function render()
    {
        return view('components.card');
    }
}
