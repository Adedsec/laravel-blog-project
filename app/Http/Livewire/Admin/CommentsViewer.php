<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class CommentsViewer extends Component
{
    public $comments;

    public function mount()
    {
        $this->comments = Comment::all();
    }

    public function render()
    {
        return view('livewire.admin.comments-viewer');
    }
}
