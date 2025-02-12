<x-layout>
    <x-slot:heading>
        Job Post
    </x-slot:heading>
    <p class="font-bold text-lg">{{ $job->title }}</p>
    <p>This job salary is {{ $job->salary }}.</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </p>
</x-layout>
