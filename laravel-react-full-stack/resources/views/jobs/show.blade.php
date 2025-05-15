<x-layout heading="Job">
    <x-slot:heading>
        {{ $job->title }}'s Job Details
    </x-slot:heading>

    <div>
        <h2 class="font-bold text-lg mb-4">
            {{ $job->title }}
        </h2>
        <p>
            This job pays <span class="font-semibold">{{ $job->salary }}</span> per year.
        </p>
    </div>

    <div class="flex items-center mt-5 space-x-4 ">
        <div>
            @can('edit', $job)
                <x-button href='/jobs/{{ $job->id }}/edit' class=" rounded-r-lg">
                    Edit Job
                </x-button>
            @endcan

            <div class="flex items-center">
                <form action="/jobs/{{ $job->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @can('edit', $job)
                        <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-4 rounded">
                            Delete
                        </button>
                    @endcan

                </form>
            </div>

        </div>

    </div>

</x-layout>
