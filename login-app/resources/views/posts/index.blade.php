<x-layout class="">
    <x-slot:heading>
        Post
    </x-slot:heading>
    <div>
        <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 p-4 gap-4">
            @foreach ($posts as $post)
                <li class=" h-50 overflow-hidden shadow-xl text-white">

                    <a href="/posts/{{ $post->id }}"
                        class="block bg-gray-800 p-4 rounded-lg h-full shadow-xl text-white hover:bg-gray-700 transition duration-200 space-y-5">
                        <div class="flex justify-center font-bold uppercase">
                            {{ $post->title }}
                        </div>
                        <div class="text-gray-400">
                            {{ $post->description }}
                        </div>
                    </a>


                </li>
            @endforeach
        </ul>

    </div>
    <div class="mt-6">
        {{ $posts->links() }}
    </div>

</x-layout>
