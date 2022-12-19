<div class=" text-right ">
    <table class="w-full rounded text-sm text-right text-gray-500 border border-gray-200 rounded-lg">
        <thead class="text-lg text-gray-700 uppercase bg-gray-50">
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
            <tr class="bg-white">
                <td scope="row"
                    class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap ">
                    <a href="{{ route('posts.show',$post) }}">

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
                           class="py-1 mx-1 px-2 bg-white border border-red-500 text-red-500 rounded hover:text-white hover:bg-red-500">
                            delete
                        </a>
                        <a href=""
                           class="py-1 mx-1 px-2 bg-white border border-blue-500 text-blue-500 rounded hover:text-white hover:bg-blue-500">
                            edit
                        </a>
                    </div>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
