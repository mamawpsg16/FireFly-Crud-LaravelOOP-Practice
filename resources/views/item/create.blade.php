<x-layout>
    @section('title','Create Item')
    <x-back-button route="items"></x-back-button>
    <x-create-update-card>
        <x-session></x-session>
        <h1 class="text-center text-lg">Create Post</h1>
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            
            <label for="">ITEM TYPE</label>
            <select name="type_id" class="block w-full  py-1 mb-2">
                <option disabled selected="selected" class="@error('type_id') border-red-500 @enderror">Select a Type
                </option>
                @if ($types)
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>
                            {{ $type->code }}</option>
                    @endforeach
                @endif
            </select>
            @error('type_id')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="">Code</label>
            <input class="block w-full border-2  py-1 @error('code') border-red-500 @enderror" id=""
                name="code" type="text" value="{{ old('code') }}">
            @error('code')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="">Description</label>
            <input class="block w-full border-2  py-1 @error('description') border-red-500 @enderror" id=""
                name="description" type="text" value="{{ old('description') }}">
            @error('description')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <button
                class="text-base bg-green-600  p-2 mt-2 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2"
                type="submit">
                Create
            </button>
        </form>
    </x-create-update-card>
</x-layout>
