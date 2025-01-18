<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class LatestPost extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.home.latest-post');
    }
}
