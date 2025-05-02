<x-layout heading="Job">
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg mb-4">
        {{ $job['title'] }}
    </h2>
    <p>
        This job pays <span class="font-semibold">{{ $job['Salary'] }}</span> per year.
    </p>
</x-layout>