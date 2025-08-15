<x-layout title="Add New Skill">
    <h1 class="text-blue-400 text-xl mb-6">Add New Skill</h1>

    <form action="{{ route('skills.store') }}" method="POST" class="space-y-6 max-w-lg">
        @csrf

        {{-- Name --}}
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">

            <div class="min-h-[20px]">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Description --}}
        <div>
            <label for="description" class="block text-sm font-medium mb-1">Description</label>
            <input type="text" name="description" id="description" value="{{ old('description') }}"
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            <div class="min-h-[20px]">
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- Category --}}
        <div>
            <label for="category" class="block text-sm font-medium mb-1">Category</label>
            <input type="text" name="category" id="category" value="{{ old('category') }}"
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            <div class="min-h-[20px]">
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Save
            </button>
            <a href="{{ route('skills.index') }}" class="text-blue-400 underline">Back To Skills</a>
        </div>
    </form>
</x-layout>