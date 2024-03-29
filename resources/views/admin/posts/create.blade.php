@extends('layouts.admin-panel')

@section('content')
    <div class="mx-4 bg-gray-100 border-2 border-gray-200 rounded p-2 ">
        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col">
            @csrf

            <div class="flex flex-col flex-1 w-1/2  m-2">
                <label for="title" class="mb-2">{{ __('Title') }} : </label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="w-full h-10 rounded border-2 border-blue-300 {{ $errors->has('title') ? 'border-red-200' : '' }}"
                    placeholder="{{ __('Title') }}">
                @if ($errors->has('title'))
                    @foreach ($errors->get('title') as $err)
                        <p class="text-red-400 text-sm">{{ $err }}</p>
                    @endforeach
                @endif
            </div>


            <div class=" mx-2">
                <label for="body" class="mb-4">{{ __('Text') }} : </label>
                <textarea name="body" id="body" rows="15"
                    class="w-full mt-2 rounded border-2 border-blue-300 text-sm {{ $errors->has('title') ? 'border-red-200' : '' }}">
                    {{ old('body') }}
                </textarea>
                @if ($errors->has('body'))
                    @foreach ($errors->get('body') as $err)
                        <p class="text-red-400 text-sm">{{ $err }}</p>
                    @endforeach
                @endif
            </div>

            <div class=" m-2">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>

                            <strong class="text-gray-400">Thumbnail image</strong>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                    upload</span>
                                or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX.
                                800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" name="thumbnail" class="hidden" />
                    </label>
                </div>

                @if ($errors->has('thumbnail'))
                    @foreach ($errors->get('thumbnail') as $err)
                        <p class="text-red-400 text-sm">{{ $err }}</p>
                    @endforeach
                @endif
            </div>

            <div class="m-2 flex flex-row justify-items-center">
                <label for="categories">{{ __('Categories') }} : </label>
                <select class="w-1/4 mx-2 max-h-20 block rounded-lg rounded text-sm border-blue-300 ring-black"
                    name="categories[]" id="categories" multiple>
                    <option value="0" disabled>none</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @if ($errors->has('title'))
                    @foreach ($errors->get('categories') as $err)
                        <p class="text-red-400 text-sm">{{ $err }}</p>
                    @endforeach
                @endif
            </div>


            <button
                class="bg-white border-2 border-blue-500 rounded w-fit px-2 mt-2 text-blue-500
                hover:text-white hover:bg-blue-500"
                type="submit">{{ __('Create Post') }}</button>
        </form>
    </div>
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>



        <script type="text/javascript">
            tinymce.init({

                selector: 'textarea#body',

                height: 300,

                menubar: false,
                formats: {
                    // Changes the default format for h1 to have a class of heading
                    h1: {
                        block: 'h1',
                        classes: 'text-3xl'
                    },
                    h2: {
                        block: 'h2',
                        classes: 'text-2xl'
                    },
                    h3: {
                        block: 'h3',
                        classes: 'text-xl'
                    },
                    h4: {
                        block: 'h4',
                        classes: 'text-lg'
                    },
                    h5: {
                        block: 'h5',
                        classes: 'text-md'
                    },
                    h6: {
                        block: 'h6',
                        classes: 'text-3xl'
                    },
                    ol
                },

                plugins: [

                    'advlist autolink lists link image charmap print preview anchor',

                    'searchreplace visualblocks code fullscreen',

                    'insertdatetime media table paste code help wordcount', 'image'

                ],

                toolbar: 'undo redo | formatselect | ' +

                    'bold italic backcolor | alignleft aligncenter ' +

                    'alignright alignjustify | bullist numlist outdent indent | ' +

                    'removeformat | help',

                content_css: '//www.tiny.cloud/css/codepen.min.css'

            });
        </script>
    @endpush
@endsection
