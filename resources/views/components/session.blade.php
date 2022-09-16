@if(Session::has('message'))
<p class="text-green-800 bg-gray-100/50 p-2 w-full text-center font-medium">{{ Session::get('message') }}</p>
@endif