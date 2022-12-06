<x-app-layout>

    <div class="container mx-auto px-[150px] mt-6 text-xl">
        <div class="">
            <p class="text-base md:text-sm text-green-500 font-bold">&lt;
                <a href="#"
                   class="text-base text-md md:text-sm text-green-500 font-bold no-underline hover:underline">{{__('Back To Blog')}}</a>
            </p>
            <h1 class="font-bold break-normal text-gray-900 pt-6 pb-2 text-4xl md:text-4xl">
                {{$post->title}}
            </h1>
            <p class="text-sm md:text-base font-normal text-gray-600">{{$post->publishDate()}}</p>
            <p class="text-sm md:text-base font-normal text-gray-600">{{$post->author->name}}</p>
        </div>

        @if($post->hasThumbnail())
            <img src="" alt="">
        @endif
        <p class="py-6 mt-2 leading-loose text-justify">

            {{$post->body}}
        </p>

        <!--Author-->
        <div class="flex w-full items-center font-sans px-4 py-12">
            <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
            <div class="flex-1 px-2">
                <p class="text-base font-bold text-base md:text-xl leading-none mb-2">{{$post->author->name}}</p>
            </div>
            <div class="justify-end">
                <button
                    class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">
                    Read More
                </button>
            </div>
        </div>
        <!--/Author-->

        <!--Divider-->
        <hr class="border-b-2 border-gray-400 mb-8 mx-4">

        <!--Next & Prev Links-->
        <div class="font-sans flex justify-between content-center px-4 pb-12">
            <div class="text-left">
                <span class="text-xs md:text-sm font-normal text-gray-600">&lt; Previous Post</span><br>
                <p><a href="#"
                      class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog
                        title</a></p>
            </div>
            <div class="text-right">
                <span class="text-xs md:text-sm font-normal text-gray-600">Next Post &gt;</span><br>
                <p><a href="#"
                      class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Blog
                        title</a></p>
            </div>
        </div>


        <!--/Next & Prev Links-->

        <div class="">
            <div class="mb-2">

                <h3 class="text-2xl">
                    {{__('Comments')}}
                </h3>
            </div>

            <ul class="divide-y divide-gray-400 w-1/2">

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
                    <textarea class="border-gray-400 border rounded" name="text" id="text" cols="10" rows="3">

                </textarea>
                    <button class="bg-white text-sm border border-blue-500 rounded w-fit p-1 mt-2 text-blue-500
                hover:text-white hover:bg-blue-500"
                            type="submit">{{__('Save Comment')}}</button>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>



