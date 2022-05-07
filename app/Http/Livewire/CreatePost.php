<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        
        Post::create([
            'user_id' => Auth::id(), 
            'body' => $this->body
        ]);

        $this->body = "";
    }
}
