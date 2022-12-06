<div class="m-2 mt-4">

    <h3 class="text-gray-600 text-lg ">
        {{__('Add')}} :
    </h3>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="name" id="floating_first_name"
                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder="" required/>
                <label for="floating_first_name"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:right-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{__('Name')}}
                </label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="slug" id="floating_last_name"
                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" "/>
                <label for="floating_last_name"
                       class="peer-focus:font-medium peer-focus:text-right absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:right-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{__('Slug')}}
                </label>
            </div>
        </div>
        <div class="flex flex-col">
            <label for="parent" class="text-gray-600">{{__("Parent")}} : </label>
            <select name="parent_id" id="parent" class="w-1/3 my-4 border-gray-200 rounded-lg text-sm h-10">
                <option value="{{null}}">------</option>
                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">
                        {{$cat->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="relative z-0 mb-6">
            <button
                class="bg-white border border-green-500 text-green-500 p-2 rounded w-1/12 hover:text-white hover:bg-green-500"
                type="submit">{{__('Create')}}</button>
        </div>
    </form>
</div>
