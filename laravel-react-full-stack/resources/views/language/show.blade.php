<x-layout>
    <x-slot:heading>
        {{ $language['title'] }}
    </x-slot:heading>

    <div>
        <p>
            <span class="font-semibold">{{ $language->title }}</span>
        </p>
        <p>
            <span class="font-semibold">{{ $language['description'] }}</span>
        </p>
    </div>

    <div class="flex items-center mt-5 space-x-4 ">
        <div>
            <x-button href='/languages/{{ $language->id }}/edit' class=" rounded-r-lg">
                Edit Language
            </x-button>
            <div class="flex items-center">
                <form action="/languages/{{ $language->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-4 rounded">
                        Delete
                    </button>

                </form>
            </div>

        </div>

    </div>
</x-layout>
