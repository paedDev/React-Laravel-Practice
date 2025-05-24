        @props(['job'])
        <x-panel class=" flex flex-col text-center ">

            <div class="self-start">
                {{ $job->employer->name }}
            </div>
            <div class="py-8 ">
                <h3 class="group-hover:text-blue-800 text-xl font-bold transition duration-500">
                    <a href="{{ $job->url }}" target="_blank">
                        {{ $job->title }}
                    </a>

                </h3>
                <p class="text-sm mt-4">{{ $job->salary }}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
                <div class="">
                    @foreach ($job->tags as $tag)
                        <x-tag size='small' :tag="$tag" />
                    @endforeach

                </div>
                <x-employer-logo :employer="$job->employer" :width="42" />

            </div>

        </x-panel>
