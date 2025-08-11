<x-layout>
    <h1 class="text-blue-400 text-xl">{{ $skill->name }}</h1>

    <p>
        This skill has an ID of <strong>{{ $skill->id }}</strong>
    </p>

    <h2>
        <a href="/skills" class="text-blue-400 underline">Back To Skills</a>
    </h2>
</x-layout>