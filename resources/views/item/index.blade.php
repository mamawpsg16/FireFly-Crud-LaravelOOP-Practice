<x-layout>
    @section('title','Item Lists')
    <x-navbar></x-navbar>
    <x-session></x-session>
    <div class="flex justify-center mt-4">
        <div class=" w-3/6 flex justify-end space-x-2">
            <form action="{{ route('items.export-pdf') }}" method="POST" target="_blank">
                @csrf
                <button type="submit" class="text-base bg-gray-600 rounded-lg p-2 mt-4 hover:bg-gray-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer">Export PDF</button>
            </form>
            <form action="{{ route('items.export-csv') }}" method="POST" target="_blank">
                @csrf
                <button type="submit" class="text-base bg-gray-600 rounded-lg p-2 mt-4 hover:bg-gray-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer">Download CSV</button>
            </form>
            <a class="text-base bg-green-600 rounded-lg p-2 mt-4 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer"
                href="{{ route('items.create') }}">Create
            </a>
        </div>
    </div>
    <x-search route="item"></x-search>
    <div   class="flex  justify-center  space-y-3 mt-2" >
        <table class="table-auto w-3/6 border">
            <thead>
              <tr>
                <th class="px-4 py-2 border">TYPE CODE</th>
                <th class="px-4 py-2 border">TYPE DESCRIPTION</th>
                <th class="px-4 py-2 border">CODE</th>
                <th class="px-4 py-2 border">DESCRIPTION</th>
                <th class="px-4 py-2 border">ACTIONS</th>
              </tr>
            </thead>
            <tbody >
                @forelse ($items as $item)
                    <tr>
                        <td class="border   py-4 font-medium">{{ $item->type->code }}</td>
                        <td class="border   py-4 font-medium">{{ $item->type->description }}</td>
                        <td class="border   py-4 font-medium">{{ $item->code }}</td>
                        <td class="border   py-4 font-medium">{{ $item->description }}</td>
                        <td class="border   py-4 font-medium flex"><a href="{{ route('items.edit',$item->id) }}" class="bg-blue-600 inline ml-1 text-white text-base rounded-lg p-2 hover:cursor-pointer hover:bg-blue-700 uppercase">Edit</a>
                            <form action="{{ route('items.destroy',$item->id) }}" method="post" >
                                @method('DELETE')
                                @csrf
                                <button class="bg-red-600  ml-1 inline text-base rounded-lg text-white  hover:bg-red-700 p-2 hover:cursor-pointer uppercase ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr >
                        <td colspan="5" class="text-center font-base font-semibold">No Existing Data.</td>
                    </tr>
                @endforelse
            
            </tbody>
        </table>
    </div>
    {{-- <div   class="flex  justify-center  space-y-3 mt-2" >
        <div class="w-3/6 ">
            {{ $items->links('pagination::tailwind') }}
        </div>
    </div> --}}
</x-layout>