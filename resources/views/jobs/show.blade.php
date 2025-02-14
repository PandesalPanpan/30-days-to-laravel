<x-layout>
    <x-slot:heading>
        Job Post
    </x-slot:heading>
    <p class="font-bold text-lg">{{ $job->title }}</p>
    <p>This job salary is {{ $job->salary }}.</p>

    @can('edit', $job)
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </p>
    @endcan
</x-layout>
