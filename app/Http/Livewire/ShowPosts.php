<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Auth;
class ShowPosts extends Component
{
    public $posts, $text, $title, $description, $post_id;
    public $isDialogOpen=0;
    public function render()
    {
        $this->posts = Post::latest()->get();
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

    public function clearForm()
    {
        $this->title = '';
        $this->description = '';
    }

    public function store()
    {
        $this->isDialogOpen = false;
        // $this->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);


        Post::updateOrCreate(['id'=>$this->post_id],[
            'title'=>$this->title,
            'description'=>$this->description,
            'user_id'=> Auth::user()->id,
        ]);

        session()->flash('message',$this->post_id ? 'Post Updated':'Post created');


    }



}
