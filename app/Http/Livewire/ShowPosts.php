<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class ShowPosts extends Component
{
    public $posts, $text;
    public $isDialogOpen=0;
    public function render()
    {
        $this->posts = Post::all();
        $this->text = 'Test';
        return view('livewire.show-posts');
    }

    public function create()
    {
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isDialogOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isDialogOpen = false;
    }

}
