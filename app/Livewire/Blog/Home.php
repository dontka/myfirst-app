<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Post;

class Home extends Component
{
    public function render()
    {
        $Post = Post::latest()->get();
        return view('livewire.blog.home', compact('Post'));
    }
}
