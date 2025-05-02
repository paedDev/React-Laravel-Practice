<x-layout>
    <x-slot:heading>
        All Language
    </x-slot:heading>
    <ul class="flex flex-col items-start font-bold text-sky-500 ">
            @foreach ($languages as $language)
            <a href="/languages/{{$language['id']}}">
                <li class="hover:translate-x-1 duration-500 hover:underline cursor-pointer">
                    {{$language['title']}}
                </li>
            </a>
            @endforeach
    </ul>
</x-layout>