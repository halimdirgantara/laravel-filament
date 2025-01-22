<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Show extends Component
{
    public $post;

    public $breadcrumbs;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
        $this->breadcrumbs = [
            ['label' => 'Post', 'url' => route('post')],
            ['label' => $this->post->title, 'url' => null]
        ];
    }

    public function render()
    {
        return view('livewire.post.show', [
            'post' => $this->post
        ])->extends('layouts.app')->layoutData(['breadcrumbs' => $this->breadcrumbs]);
    }
}
