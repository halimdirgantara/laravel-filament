<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class Show extends Component
{
    public $slug;

    public $category;

    public $page = 1;

    public $breadcrumbs;
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

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->category = Category::where('slug', $slug)->firstOrFail();
        $this->breadcrumbs = [
            ['label' => 'Category', 'url' => route('category')],
            ['label' => $this->category->name, 'url' => null]
        ];
    }

    public function render()
    {
        $posts = Post::whereHas('category', function ($query) {
            $query->where('slug', $this->slug);
        })->paginate(6, ['*'], 'page', $this->page);

        return view('livewire.category.show', [
            'posts' => $posts
        ])->extends('layouts.app')->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
