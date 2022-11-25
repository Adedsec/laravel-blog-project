@extends('layouts.admin-panel')

@section('content')
    <div class="bg-gray-100 px-2 py-4 mx-4 border-2 rounded">
        <h1 class="mt-2 mb-4 mx-2 text-2xl">لیست پست ها</h1>

        @livewire('admin.posts-viewer')


        <div class="mt-4">

            <a href="{{route('posts.create')}}"
               class="rounded p-1  hover:bg-green-600 hover:text-white border-2 hover:border-green-700 border-green-400 bg-green-200 text-gray-500">
                ایجاد
                پست
            </a>
        </div>
    </div>
@endsection
