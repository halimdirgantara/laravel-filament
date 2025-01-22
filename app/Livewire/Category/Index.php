<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $page = 1;

    public $breadcrumbs;

    public function mount()
    {
        $this->breadcrumbs = [
            ['label' => 'Category', 'url' => null]
        ];
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function previousPage()
    {
        $this->page--;
    }

    public function nextPage()
    {
        $this->page++;
    }

    public function render()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(6, ['*'], 'page', $this->page);

        return view('livewire.category.index', [
            'categories' => $categories
        ])->extends('layouts.app')->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
