<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Services\Attachment\StorageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    private StorageManager $storageManager;

    public function __construct(StorageManager $storageManager)
    {

        $this->storageManager = $storageManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $this->validateForm($request);
        $post = $this->createPost($request);
        $post->categories()->attach($request->get('categories'));
        $post->thumbnail_path = $this->attachThumbnail($post, $request);
        $post->save();
        return redirect(route('admin.posts.index'));
    }

    private function createPost(Request $request): Post
    {
        return Auth::user()->posts()->create([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
    }

    private function attachThumbnail(Post $post, Request $request)
    {
        if ($request->has('thumbnail')) {
            return $post->addThumbnail($this->storageManager, $request->file('thumbnail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addComment(Request $request, Post $post)
    {
        dd($request->all());
    }

    private function validateForm(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:256'],
            'body' => ['required', 'string', 'required', 'max:65535'],
            'thumbnail' => ['nullable', 'mimes:jpg,bmp,png,jpeg', 'max:10240'],
            'categories' => ['nullable', 'array', Rule::in(Category::all()->modelKeys())]
        ]);
    }

}
