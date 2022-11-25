<x-app-layout>


    <div class="bg-gray-200 border-2  border-gray-400 p-4 rounded m-4">


        <div class="mb-4">

            <h2 class="text-2xl">
                {{$post->title}}
            </h2>
            <p class="mt-1 text-sm text-gray-500">{{$post->author->name}}</p>
        </div>

        @if($post->hasThumbnail())
            <img src="" alt="">
        @endif
        <p>

            {{$post->body}}
        </p>
    </div>

    <div class="bg-gray-100 border-[1px] border-gray-300 rounded m-4 p-2 ">
        <div class="mb-3">

            <h3 class="text-2xl">
                {{__('Comments')}}
            </h3>
        </div>

        <ul class="divide-y divide-dashed divide-gray-400 w-1/2">

            @foreach($post->comments as $comment)
                <li class=" list-none">
                    <div class="m-4">
                        <h6 class="mb-2 text-gray-500">
                            {{$comment->user->name}} :
                        </h6>
                        <p class="text-gray-600">
                            {{$comment->text}}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-2">
            <form action="{{route('posts.comment.add',[$post->id])}}" method="post" class="flex flex-col p-2">
                @csrf
                <label class="mb-2 text-black" for="text">{{__('New Comment')}}</label>
                <textarea class="border-gray-400 border-2 rounded w-1/2" name="text" id="text" cols="10" rows="3">

                </textarea>
                <button class="bg-white border-2 border-blue-500 rounded w-fit px-2 mt-2 text-blue-500
                hover:text-white hover:bg-blue-500"
                        type="submit">{{__('Save Comment')}}</button>
            </form>
        </div>
    </div>
</x-app-layout>



