<x-layout>
    <x-slot:heading>
        {{ $post['title'] }}
    </x-slot:heading>
    <div>
        <p>
            {{ $post['body'] }}
        </p>
    </div>

    <div class=" flex items-center space-x-3 mt-3">
        <div class="">
            @can('edit', $post)
                <x-button class="rounded-r-md" href="/posts/{{ $post->id }}/edit">
                    Edit post
                </x-button>
            @endcan
            @can('delete', $post)
                <div>
                    <form action="/posts/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            @endcan

        </div>



    </div>
</x-layout>
