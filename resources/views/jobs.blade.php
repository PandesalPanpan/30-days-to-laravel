<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    @foreach($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="hover:text-blue-300 hover:underline"><strong>{{ $job['title'] }}</strong>: {{ $job['salary'] }}</a><br>
    @endforeach
</x-layout>
