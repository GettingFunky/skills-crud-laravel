<x-layout title="Add New Skill">
    <h1 class="text-blue-400 text-xl">Add New Skill</h1>

<form action="{{ route('skills.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="w-full border px-3 py-2 rounded">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>

    <h2>
        <a href="/skills" class="text-blue-400 underline">Back To Skills</a>
    </h2>
</x-layout>
