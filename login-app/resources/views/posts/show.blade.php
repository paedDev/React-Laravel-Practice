<x-layout>
    <x-slot:heading>
        {{ $post->title }}
    </x-slot:heading>

    <div>
        {{ $post->description }}
    </div>

    <div class="mt-4" class="flex">
        <div class="flex space-x-4 items-center">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="px-3 py-[6.5px] bg-red-600 text-red-100 rounded-lg font-semibold ">
                    Delete
                </button>
            </form>
            <x-button href="/posts/{{ $post->id }}/edit">
                Edit
            </x-button>

        </div>

    </div>

</x-layout>
