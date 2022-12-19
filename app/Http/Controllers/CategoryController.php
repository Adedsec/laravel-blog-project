<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string'],
            'slug' => ['unique:categories']
        ]);

        $category = Category::create([
            'name' => $request->get('name'),
            'parent_id' => $request->get('parent_id')
        ]);

        if ($request->has('slug')) $category->slug = $request->get('slug');

        return back();
    }
}
