<x-layout>
    <x-slot:heading>
        Job Post
    </x-slot:heading>
    <p class="font-bold text-lg">{{ $job['title'] }}</p>
    <p>This job salary is {{ $job['salary'] }}.</p>
</x-layout>
