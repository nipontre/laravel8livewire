<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class ShowPosts extends Component
{
    public $posts, $text;
    public function render()
    {
        $this->posts = Post::all();
        $this->text = 'Test';
        return view('livewire.show-posts');
    }
}
