<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;
use App\Models\Subscriber;

class Subscribe extends Component
{
    public $email;
    public $randomImage;
    public $successAlert;
    protected $rules = [
        'email' => 'required|email:rfc,dns|unique:subscribers,email',
    ];

    public function mount()
    {
        $this->email = '';
        $this->randomImage = Post::inRandomOrder()->first()->feature_image;
    }

    public function render()
    {
        return view('livewire.home.subscribe');
    }

    public function subscribe()
    {
        $this->validate();        

        $subscribe = Subscriber::create([
            'email' => $this->email,
        ]);

        if ($subscribe) {
            $this->email = '';
            $this->successAlert = true;
            session()->flash('success', 'Thank you for subscribing to our newsletter!');
        }
    }

    public function closeAlert()
    {
        $this->successAlert = false;
    }
}
