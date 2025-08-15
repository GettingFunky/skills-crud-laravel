<x-layout>
    <h1 class="text-blue-400 text-xl">{{ $skill->name }}</h1>

    <p>
        This skill has an ID of <strong>{{ $skill->id }}</strong>
    </p>
    <p>
        Description: <strong>{{ $skill->description }}</strong>
    </p>
    <p>
        Category: <strong>{{ $skill->category }}</strong>
    </p>

    <form action="{{ route('skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete this category?');">
        @csrf
        @method('DELETE')
        <button class="text-red-500">Delete</button>
    </form>

    <h2>
        <a href="/skills" class="text-blue-400 underline">Back To Skills</a>
    </h2>
</x-layout>