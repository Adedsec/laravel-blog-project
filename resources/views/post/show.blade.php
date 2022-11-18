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
</x-app-layout>



