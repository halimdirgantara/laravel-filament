<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public $page = 1;

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
        $posts = Post::orderBy('created_at', 'desc')->paginate(6, ['*'], 'page', $this->page);

        return view('livewire.post.index', [
            'posts' => $posts
        ])->extends('layouts.app');
    }
}
