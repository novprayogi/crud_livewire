<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
	public $updateId = 0;
	public $body = 0;
	protected $listeners = [
		'post-created' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post', [
        	'posts'=> Post::latest()->get()
        ]);
    }

    public function showUpdateForm($id)
    {
    	$post = Post::find($id);
    	$this->body = $post->body;
    	$this->updateId = $id;
        
    }

    public function update($id)
    {
    	$post = Post::find($id);
    	$post->body = $this->body;
    	$post->save();

    	$this->updateId = 0;
    }
}
