<x-layout heading="All Jobs">
    <x-slot:heading>
        All Jobs
    </x-slot:heading>

    <ul class="list-disc ml-6">
        @foreach($jobs as $job)
            <li class="mb-2">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                    {{ $job['title'] }} : Pays {{$job['Salary']}} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>