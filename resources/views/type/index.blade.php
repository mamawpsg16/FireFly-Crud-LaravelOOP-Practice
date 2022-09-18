<x-layout>
    @section('title','Type Lists')
    <h1 class="text-2xl text-center">TYPES</h1>
    <x-session></x-session>
    <div class="flex justify-center mt-4">
        <div class=" w-2/6 flex justify-end  space-x-2">
            <a class="text-base bg-green-600 rounded-lg p-2 mt-4 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer"
                href="{{ route('types.create') }}">Create</a>
            <form action="{{ route('types.export-pdf') }}" method="POST" target="_blank">
                @csrf
                <button type="submit" class="text-base bg-gray-600 rounded-lg p-2 mt-4 hover:bg-gray-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer">Export PDF</button>
            </form>
        </div>
    </div>
    <div class="flex justify-center  space-y-3 mt-2">
        <table class="table-auto w-2/6 border-2">
            <thead>
                <tr>
                    <!-- <th class="px-4 py-2 border">Image</th> -->
                    <th class="px-4 py-2 border">CODE</th>
                    <th class="px-4 py-2 border">DESCRIPTION</th>
                    <th class="px-4 py-2 border">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                    <tr>
                        <td class="border   py-4 font-medium">{{ $type->code }}</td>
                        <td class="border   py-4 font-medium">{{ $type->description }}</td>
                        <td class="border   py-4 font-medium flex"><a href="{{ route('types.edit', $type->id) }}"
                                class="bg-blue-600 inline ml-1 text-base  p-2 hover:cursor-pointer rounded-lg hover:bg-blue-700 text-white uppercase">Edit</a>
                            <form action="{{ route('types.destroy', $type->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button
                                    class="bg-red-600  ml-1 inline text-base p-2 rounded-lg hover:bg-red-700 hover:cursor-pointer text-white uppercase ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center font-base font-semibold">No Existing Data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
