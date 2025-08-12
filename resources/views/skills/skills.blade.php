<x-layout title="Dashboard">
    <h1 class="text-blue-400 text-xl">Dashboard</h1>
    <p class="text-red-900 hover:underline">
        <a href="/skills/{{ $randomSkill->id }}" >Click here to display a random skill from the list</a>
</p >
    <!-- <x-slot name="title">Dashboard</x-slot> -->
    <ul>
        @foreach($skills as $skill)
            <li><a href="/skills/{{ $skill->id }}">{{ $skill->name }}</a></li>
        @endforeach
    </ul>
</x-layout>
