<div class="m-2 mt-4">

    <h4 class="text-gray-600 mb-4">
        {{__('Add Category')}}
    </h4>
    <form action="" method="post">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" " required/>
                <label for="floating_first_name"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:right-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{__('Name')}}
                </label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" " required/>
                <label for="floating_last_name"
                       class="peer-focus:font-medium peer-focus:text-right absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:right-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{__('Slug')}}
                </label>
            </div>
        </div>
        <div class="relative z-0 mb-6">
            <button
                class="bg-white border border-green-300 text-green-500 p-2 rounded w-1/12 hover:text-white hover:bg-green-500"
                type="submit">{{__('Create')}}</button>
        </div>
    </form>
</div>
