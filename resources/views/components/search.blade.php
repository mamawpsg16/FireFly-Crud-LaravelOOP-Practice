@props(['route'])
<div class="flex justify-center mt-4">
    <div class="@if($route == 'item') w-3/6 @else w-2/6 @endif flex justify-end space-x-2">
        <form action="{{ $route == 'item' ? route('items.index') : route('types.index') }}">
            <div class="relative border border-gray-100 m-4 rounded-lg">
                <div class="absolute top-4 left-3">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                </div>
                <input type="text" name="search"
                    class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search ..." value="{{  request('search') }}"/>
                <div class="absolute top-2 right-2">
                </div>
            </div>
        </form>
    </div>
</div>
