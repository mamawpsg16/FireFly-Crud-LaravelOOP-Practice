<x-layout>
    <h1 class="text-2xl text-center">TYPES</h1>
    <x-session></x-session>
    <div class="flex justify-end">
            <a class="text-base bg-green-600 rounded-lg p-2 mt-4 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mx-auto md:mb-2" href="{{ route('type.create') }}">Create</a>
    </div>
    <div   class="flex  justify-center  space-y-3 mt-2" >
        <table class="table-auto w-2/6 border-2">
            <thead>
              <tr>
                <!-- <th class="px-4 py-2 border">Image</th> -->
                <th class="px-4 py-2 border">CODE</th>
                <th class="px-4 py-2 border">DESCRIPTION</th>
                <th class="px-4 py-2 border">ACTIONS</th>
              </tr>
            </thead>
            @if (count($types) > 0)
                <tbody >
                @foreach ($types as $type )
                    <tr>
                        <td class="border   py-4 font-medium">{{ $type->code }}</td>
                        <td class="border   py-4 font-medium">{{ $type->description }}</td>
                        <td class="border   py-4 font-medium flex"><a href="{{ route('type.edit',$type->id) }}" class="bg-blue-600 inline ml-1 text-base rounded-sm p-2 hover:cursor-pointer text-white uppercase">Edit</a>
                            <form action="{{ route('type.destroy',$type->id) }}" method="post" >
                                @method('DELETE')
                                @csrf
                                <button class="bg-red-600  ml-1 inline text-base rounded-sm p-2 hover:cursor-pointer text-white uppercase ">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            @else
                <tbody >
                    <tr >
                    <td colspan="4" class="text-center font-base font-semibold">No Existing Data ...</td>
                    </tr>
                </tbody>
            @endif
       
        </table>
    </div>
</x-layout>