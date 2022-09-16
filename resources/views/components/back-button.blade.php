@props(['route'])
<div class="ml-96">
    @if($route == 'item')
        <a href="{{ route('item.index') }}" class="text-base text-center w-16 block bg-gray-600  p-2 mt-2 hover:bg-gray-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2">Back</a>
    @elseif($route == 'type')
        <a href="{{ route('type.index') }}" class="text-base text-center w-16 block bg-gray-600  p-2 mt-2 hover:bg-gray-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2">Back</a>
    @endif
</div>