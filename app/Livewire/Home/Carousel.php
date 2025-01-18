<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class Carousel extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::inRandomOrder()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.home.carousel');
    }
}
