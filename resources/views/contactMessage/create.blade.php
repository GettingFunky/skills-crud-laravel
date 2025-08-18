<x-layout title="Send us a message">
    <h1 class="text-blue-400 text-xl mb-6">Contact Us</h1>

    <form action="/contact" method="POST" class="space-y-6 max-w-lg">
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

        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-medium mb-1">E-mail</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}"
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            <div class="min-h-[20px]">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- Subject --}}
        <div>
            <label for="subject" class="block text-sm font-medium mb-1">Subject</label>
            <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            <div class="min-h-[20px]">
                @error('subject')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Message --}}
        <div>
            <label for="message" class="block text-sm font-medium mb-1">Message</label>
            <input type="text" name="message" id="message" value="{{ old('message') }}" placeholder="Type your message..."
                class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-300">
            <div class="min-h-[20px]">
                @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Send
            </button>
            <a href="{{ route('skills.index') }}" class="text-blue-400 underline">Back To Skills</a>
        </div>
    </form>
</x-layout>