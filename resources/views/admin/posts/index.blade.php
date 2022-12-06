{{--<x-app-layout>--}}


{{--</x-app-layout>--}}


@extends('layouts.admin-panel')

@section('content')
    <div class="bg-gray-100 px-2 py-4 mx-4 border-2 rounded">
        <h1 class="mt-2 mb-4 mx-2 text-2xl">لیست پست ها</h1>

        @livewire('admin.posts-viewer')


        <div class="mt-4">

            <a href="{{route('admin.posts.create')}}"
               class="rounded p-1  hover:border-green-500 border-green-500 bg-white text-green-500 hover:bg-green-500 hover:text-white border ">
                {{__("Create :resource",['resource'=> __('Post')])}}
            </a>
        </div>
    </div>
@endsection
