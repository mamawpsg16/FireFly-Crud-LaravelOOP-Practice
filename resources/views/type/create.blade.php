<x-layout>
    @section('title','Create Type')
    <x-navbar></x-navbar>
    <x-back-button route="types"></x-back-button>
    <x-create-update-card>
        <x-session></x-session>
        <h1 class="text-center text-lg">Create Post</h1>
        <form method="POST" action="{{ route('types.store') }}">
            @csrf
            <label for="">Code</label>
            <input
            class="block w-full border-2  py-1 @error('code') border-red-500 @enderror"
            id=""
            name="code"
            type="text"
            value="{{ old('code') }}"
            >
            @error('code')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="">Description</label>
            <input
            class="block w-full border-2  py-1 @error('description') border-red-500 @enderror"
            id=""
            name="description"
            type="text"
            value="{{ old('description') }}"
            >
            @error('description')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <button type="submit" class="text-base bg-green-600  p-2 mt-2 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2">Create</button>
        </form>
    </x-create-update-card>
</x-layout>