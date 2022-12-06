<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'slug' => $request->get('slug') ? $request->get('slug') : Str::slug($request->get('name')),
            'parent_id' => $request->get('parent_id')
        ]);

        return back();
    }
}
