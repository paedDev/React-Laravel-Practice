<x-layout>
    <x-slot:heading>
        All Language
    </x-slot:heading>
    <div class="w-5/6 mx-auto ">
        <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5 lg:p-4 p-0 font-bold text-sky-500 space-x-4 ">
            @foreach ($languages as $language)
            <li class="space-x-4  hover:scale-105 duration-500 transform">
                  <a href="/languages/{{$language['id']}}">
                <x-language-card class="p-4 w-52 h-32 overflow-auto flex justify-center items-center flex-col lg:space-y-5 space-y-0">
                    <h1>
                        {{$language['title']}}
                    </h1>
                    <button class="inline-block bg-gradient-to-r from-sky-300 to-purple-800 p-1 bg-clip-text text-transparent cursor-pointer text-xs">Click for more details</button>
                 
                    
                </x-language-card>
            </a>
            </li>
          
            @endforeach
    </ul>
    </div>
   
</x-layout>