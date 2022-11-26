<div class=" text-right ">
    <table class="w-full rounded text-sm text-right text-gray-500 border border-gray-200 rounded-lg">
        <thead class="text-lg text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="py-3 px-6">
                {{__('Name')}}
            </th>
            <th scope="col" class="py-3  px-6">
                {{__('Slug')}}
            </th>
            <th class="py-3 px-6">
                عملیات
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($categories as $category)
            <tr class="bg-white">
                <td scope="row"
                    class="py-4 px-6  font-medium text-gray-900 whitespace-nowrap ">
                    <a href="">

                        {{ $category->name }}
                    </a>
                </td>
                <td class="py-4 px-6">
                    {{ $category->slug }}
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
