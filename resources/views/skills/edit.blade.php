<x-layout title="Edit Skill">
    <h1 class="text-blue-400 text-xl mb-6">
        Edit Skill <strong>{{ $skill->name }}</strong>
    </h1>

    <form action="{{ route('skills.update', $skill) }}" method="POST" class="space-y-6 max-w-lg">
        @csrf
        @method('PUT')

        {{-- Name --}}
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Name</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name', $skill->name) }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div>
            <label for="description" class="block text-sm font-medium mb-1">Description</label>
            <input type="text" name="description" id="description"
                   value="{{ old('description', $skill->description) }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Category --}}
        <div>
            <label for="category" class="block text-sm font-medium mb-1">Category</label>
            <input type="text" name="category" id="category"
                   value="{{ old('category', $skill->category) }}"
                   class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Update
            </button>
            <a href="{{ route('skills.index') }}" class="text-blue-400 underline">Back To Skills</a>
        </div>
    </form>
</x-layout>
