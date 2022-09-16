<x-layout>
    <x-back-button route="type"></x-back-button>
    <x-create-update-card>
        <x-session></x-session>
        <h1 class="text-center text-lg">Update Post</h1>
        <form method="POST" action="{{ route('type.update',$type->id) }}">
            @method('PUT')
            @csrf
         <label for="">Code</label>
         <input type="text" name="code" id="" value="{{ $type->code }}" class="block w-full border-2  py-1 @error('code') border-red-500 @enderror">
         @error('code')
             <div class="text-red-500">{{ $message }}</div>
         @enderror
         <label for="">Description</label>
         <input type="text" name="description" id="" value="{{ $type->description }}" class="block w-full border-2  py-1 @error('description') border-red-500 @enderror">
         @error('description')
             <div class="text-red-500">{{ $message }}</div>
         @enderror
         <button type="submit" class="text-base bg-blue-600  p-2 mt-2 hover:bg-blue-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2">Update</button>
        </form>
    </x-create-update-card>
</x-layout>