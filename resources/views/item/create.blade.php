<x-layout>
    <x-back-button route="item"></x-back-button>
    <x-create-update-card>
        <x-session></x-session>
        <h1 class="text-center text-lg">Create Post</h1>
        <form method="POST" action="{{ route('item.store') }}">
            @csrf
        <label for="">ITEM TYPE</label>
        <select name="type_id" class="block w-full  py-1 mb-2">
            <option  disabled selected="selected" class="@error('type_id') border-red-500 @enderror"">Select a Type</option>
            @if($types)
                @foreach ($types as $type)
                <option  value="{{ $type->id }}">{{ $type->code }}</option>
                @endforeach
            @endif
        </select>
        @error('type_id')
             <div class="text-red-500">{{ $message }}</div>
         @enderror
         <label for="">Code</label>
         <input type="text" name="code" id="" value="{{ old('code') }}" class="block w-full border-2  py-1 @error('code') border-red-500 @enderror">
         @error('code')
             <div class="text-red-500">{{ $message }}</div>
         @enderror
         <label for="">Description</label>
         <input type="text" name="description" id="" value="{{ old('description') }}" class="block w-full border-2  py-1 @error('description') border-red-500 @enderror">
         @error('description')
             <div class="text-red-500">{{ $message }}</div>
         @enderror
         <button type="submit" class="text-base bg-green-600  p-2 mt-2 hover:bg-green-700  rounded-md text-white text-base tracking-wider uppercase font-medium hover:cursor-pointer md:mr-32 md:mb-2">Create</button>
        </form>
    </x-create-update-card>
</x-layout>