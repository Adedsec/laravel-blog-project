@php use Illuminate\Support\Facades\Route; @endphp
<x-app-layout>
    <div class="flex h-full mt-6">
        <div class="w-1/6 px-2 ">
            <ul class="w-full divide-y divide-white h-full border rounded overflow-hidden">
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Home')}}
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.posts.index')}}"
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.posts.index' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Posts Management')}}
                    </a>
                </li>

                <li class="">
                    <a href="{{route('admin.categories.index')}}"
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Categories Management')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>
                <li class="">
                    <a href=""
                       class=" block p-2 border-0
                        {{ Route::currentRouteName() == 'admin.setting' ? 'bg-blue-500 text-white cursor-default ' : 'bg-gray-200 hover:bg-blue-500 hover:text-white' }}">
                        {{__('Setting')}}
                    </a>
                </li>

            </ul>
        </div>
        <div class="w-5/6">
            @yield('content')
        </div>
    </div>
</x-app-layout>
