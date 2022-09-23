<nav class="relative border-b  sticky top-0 w-full bg-white py-3">
    <div class="max-w-6xl mx-auto  flex justify-between items-center px-4">
        <div class="flex space-x-3 items-center">
            <a href="/"  as="button" class="flex gap-x-1  hover:text-gray-500 px-4 py-2 rounded-md uppercase  duration-200 ease-in-out">
                {{-- Home --}}
            </a>
        </div>
        <div class="flex justify-end">
            <a href="{{  route('types.index') }}"  class="flex gap-x-1  hover:text-gray-500 px-4 py-2 uppercase  rounded-md duration-200 ease-in-out">
                Types
            </a>
            <a href="{{  route('items.index') }}"  class="flex gap-x-1  hover:text-gray-500 px-4 py-2  uppercase rounded-md duration-200 ease-in-out">
                Items
            </a>
        </div>
    </div>
</nav>