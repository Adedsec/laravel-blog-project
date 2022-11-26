@extends('layouts.admin-panel')

@section('content')
    <div class="mx-4 bg-gray-100 border-2 border-gray-200 rounded p-2 ">
        <form action="{{route('admin.posts.store')}}" method="post" class="flex flex-col">
            @csrf

            <div class="flex flex-col flex-1 w-1/2  m-2">
                <label for="title" class="mb-2">{{__('Title')}} : </label>
                <input type="text" name="title" id="title" class="w-full h-10 rounded border-2 border-blue-300"
                       placeholder="{{__('Title')}}">
            </div>


            <div class=" mx-2">
                <label for="body" class="mb-4">{{__('Text')}} : </label>
                <textarea name="body" id="body" rows="15"
                          class="w-full mt-2 rounded border-2 border-blue-300 text-sm">
                </textarea>
            </div>

            <div class=" m-2">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                           class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>

                            <strong class="text-gray-400">Thumbnail image</strong>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX.
                                800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" name="thumbnail" class="hidden"/>
                    </label>
                </div>


            </div>

            <div class="m-2 flex flex-row justify-items-center">
                <label for="categories">{{{__('Categories')}}} : </label>
                <select class="w-1/4 mx-2 max-h-20 block rounded-lg rounded text-sm border-blue-300 ring-black"
                        name="categories[]"
                        id="categories"
                        multiple>
                    <option value="0" disabled>none</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>


            <button class="bg-white border-2 border-blue-500 rounded w-fit px-2 mt-2 text-blue-500
                hover:text-white hover:bg-blue-500"
                    type="submit">{{__('Create Post')}}</button>
        </form>
    </div>
@endsection
