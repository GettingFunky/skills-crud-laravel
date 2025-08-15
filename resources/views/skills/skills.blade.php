<x-layout title="Dashboard">
    <a href="/skills/create"><button class="bg-blue-500 text-white px-4 py-2 rounded">Add a new skill</button></a>

    <h1 class="text-blue-400 text-xl">Dashboard</h1>
    <div class="space-between">
        <p class="text-red-900 hover:underline">
            <a href="/skills/{{ $randomSkill->id }}">Click here to display a random skill from the list. (Random ID =
                {{ $randomSkill->id }})</a>
        </p>
        <p class="text-red-900 hover:underline">
<!-- 
            @if(session('success'))
                <div class="mb-4 text-green-700 bg-green-100 px-4 py-2 rounded">
                    {{ session('success') }}
                </div>
            @endif -->


        <form action="{{ route('skills.store') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $newSkill->name }}">
            <input type="hidden" name="description" value="{{ $newSkill->description }}">
            <input type="hidden" name="category" value="{{ $newSkill->category }}">
            <button type="submit">Πρόσθεσε το skill ({{ $newSkill->name }})</button>
        </form>
        </p>
    </div>

    <!-- <x-slot name="title">Dashboard</x-slot> -->
    <ul>
        <div class="mt-6 mb-6">
            {{ $skills->links() }}
        </div>
        @foreach($skills as $skill)
            <li class="mb-1">
                <div class="flex gap-2 items-center">
                    <a href="/skills/{{ $skill->id }}"
                        class="flex items-center justify-center w-72 h-10 text-lg bg-gray-100 rounded shadow hover:bg-gray-200 transition">
                        {{ $skill->name }}
                    </a>
                    <a href="/skills/{{ $skill->id }}/edit"
                        class="flex items-center justify-center w-12 h-10 text-orange-500 text-sm bg-gray-50 rounded hover:bg-orange-100 transition">
                        Edit
                    </a>
                    <form action="{{ route('skills.destroy', $skill) }}" method="POST"
                        class="w-12 h-10 flex items-center justify-center">
                        @csrf
                        @method('DELETE')
                        <button class="w-full h-full text-red-500 text-sm bg-gray-50 rounded hover:bg-red-100 transition"
                            onclick="return confirm('Delete this skill?')">
                            Delete
                        </button>
                    </form>
                </div>
            </li>

        @endforeach
        <div class="mt-6">
            {{ $skills->links() }}
        </div>
    </ul>


</x-layout>