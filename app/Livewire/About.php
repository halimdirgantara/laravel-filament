<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $breadcrumbs;

    public function mount()
    {
        $this->breadcrumbs = [
            ['label' => 'About', 'url' => null]
        ];
    }

    public function render()
    {
        return view('livewire.about')->extends('layouts.app')->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
