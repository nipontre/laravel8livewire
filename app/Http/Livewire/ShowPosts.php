<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class ShowPosts extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.show-posts');
    }
}
