    @props(['job'])

    <x-panel class="flex gap-x-6">
        <div>
            <x-employer-logo />
        </div>

        <div class="flex-1 flex flex-col">
            <a class="self-start text-gray-400 text-sm ">
                Laracasts
            </a>
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition duration-500">
                Video Producer
            </h3>
            <p class="text-sm text-gray-400 mt-auto ">Full Time - From $60,000</p>
        </div>
        <div class="">
            @foreach ($job->tags as $tag)
                <x-tag :$tag>
                    backend
                </x-tag>
            @endforeach
        </div>
    </x-panel>
