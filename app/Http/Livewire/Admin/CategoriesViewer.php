<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CategoriesViewer extends Component
{
    public Collection $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.categories-viewer');
    }
}
