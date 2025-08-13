<x-layout title="Dashboard">
    <a href="/skills/create"><button class="bg-blue-500 text-white px-4 py-2 rounded">Add a new skill</button></a>

    <h1 class="text-blue-400 text-xl">Dashboard</h1>
    <div class="space-between">
        <p class="text-red-900 hover:underline">
            <a href="/skills/{{ $randomSkill->id }}">Click here to display a random skill from the list. (Random ID = {{ $randomSkill->id }})</a>
        </p>
        <p class="text-red-900 hover:underline">

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
        @foreach($skills as $skill)
            <li><a href="/skills/{{ $skill->id }}">{{ $skill->name }}</a></li>
        @endforeach
    </ul>
</x-layout>