<x-layout heading="All Jobs">
    <x-slot:heading>
        All Jobs
    </x-slot:heading>

    <div class="list-disc ml-6 space-y-4">
        @foreach($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg ">
                    {{-- render a name of employer  --}}
                    <div class="font-bold text-blue-600 text-sm">
                        {{$job->employer->name}}
                    </div>
                   <div>
                    <strong>{{ $job['title'] }} </strong>: Pays {{$job['salary']}} per year
                   </div>
                </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>