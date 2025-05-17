<x-layout>
    <x-slot:heading>
        {{ $post->title }}
    </x-slot:heading>

    <div class="space-y-2">
        <h1 class="font-bold text-xl italic">{{ $post->employer->name }}</h1>
        <h2 class="text-gray-600 ">{{ $post->description }}</h2>
    </div>

    <div class="mt-4" class="flex">
        <div class="flex space-x-4 items-center">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                {{-- @can('delete', $post) --}}
                <button class="px-3 py-[6.5px] bg-red-600 text-red-100 rounded-lg font-semibold ">
                    Delete
                </button>
                {{-- @endcan --}}
            </form>
            {{-- @can('edit', $post) --}}
            <x-button href="/posts/{{ $post->id }}/edit">
                Edit
            </x-button>
            {{-- @endcan --}}

        </div>

    </div>

</x-layout>
