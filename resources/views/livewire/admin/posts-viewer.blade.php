<div class=" text-right">
    <table class="w-full rounded text-sm text-right text-gray-500 dark:text-gray-400">
        <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">
                عنوان
            </th>
            <th scope="col" class="py-3  px-6">
                متن
            </th>
            <th scope="col" class="py-3 px-6">
                نویسنده
            </th>
            <th class="py-3 px-6">
                عملیات
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($posts as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row"
                    class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('posts.show',$post->id) }}">

                        {{ $post->title }}
                    </a>
                </td>
                <td class="py-4 px-6">
                    {{ $post->small_body }}
                </td>
                <td class="py-4 px-6">
                    {{ $post->author->name }}
                </td>
                <td class="py-4 px-6">
                    <div class="flex">

                        <a href=""
                           class="py-1 mx-1 px-2 hover:bg-red-500 border-2 hover:border-red-700 rounded hover:text-white bg-red-200 text-red-800 border-red-400">
                            delete
                        </a>
                        <a href=""
                           class="py-1 mx-1 px-2 hover:bg-blue-500 border-2 hover:border-blue-700 rounded hover:text-white bg-white text-red bg-blue-200 text-blue-800 border-blue-400">
                            edit
                        </a>
                    </div>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
