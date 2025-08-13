<x-layout title="Edit Skill">
    <h1 class="text-blue-400 text-xl">Edit Skill <strong>{{ $skill->name }} </strong> </h1>

    <form action="{{ route('skills.update', $skill) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}" required
                class="w-full border px-3 py-2 rounded">
            <label for="description" class="block text-sm font-medium">Description</label>
            <input type="text" name="description" id="description" value="{{ old('description', $skill->description) }}"
                required class="w-full border px-3 py-2 rounded">
            <label for="category" class="block text-sm font-medium">Category</label>
            <input type="text" name="category" id="category" value="{{ old('category', $skill->category) }}" required
                class="w-full border px-3 py-2 rounded">
            @error('name', 'description', 'category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>

    <h2>
        <a href="/skills" class="text-blue-400 underline">Back To Skills</a>
    </h2>
</x-layout>