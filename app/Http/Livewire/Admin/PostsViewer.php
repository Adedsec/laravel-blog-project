<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class PostsViewer extends Component
{

    public Collection $posts;

    public function mount(): void
    {
        $this->posts = Post::all();
    }

    public function render(): View
    {
        return view('livewire.admin.posts-viewer');
    }
}
