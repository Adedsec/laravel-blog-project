@extends('layouts.admin-panel')

@section('content')
    <div class="mx-4 bg-gray-100 border-2 border-gray-200 rounded p-2 ">
        <form action="{{route('admin.posts.store')}}" method="post" class="flex flex-col">
            @csrf

            <div class="flex mb-4 flex-row justify-between">

                <div class="flex flex-col flex-1 mx-2">
                    <label for="title" class="mb-2">{{__('Title')}} : </label>
                    <input type="text" name="title" id="title" class="w-full h-10" placeholder="{{__('Title')}}">
                </div>

                <div class="flex flex-col mx-2 flex-1">
                    <label for="thumbnail" class="mb-2">{{__('Thumbnail')}} : </label>
                    <input type="file" name="thumbnail" id="thumbnail" class="w-full h-10">
                </div>
            </div>

            <div class=" mx-2">
                <label for="body" class="mb-4">{{__('Text')}} : </label>
                <textarea name="body" id="body" rows="15" class="w-full mt-2">
                </textarea>
            </div>

            <button class="bg-white border-2 border-blue-500 rounded w-fit px-2 mt-2 text-blue-500
                hover:text-white hover:bg-blue-500"
                    type="submit">{{__('Create Post')}}</button>
        </form>
    </div>
@endsection
