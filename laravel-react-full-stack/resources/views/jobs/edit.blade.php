<x-layout heading="Job">
    <x-slot:heading>
        Edit Job :{{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        {{-- this csrf will automatically checks that this token is valid before accepting the request --}}
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Computer Engineer" required value="{{ $job->title }}">
                            </div>
                            @error('title')
                                <p class="text-red-500  text-xs mt-1 tracking-wider ml-1"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$50,000 Per Year " required value="{{ $job->salary }}">
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-red-500  text-xs mt-1 tracking-wider ml-1"> {{ $message }}</p>
                        @enderror
                    </div>

                </div>
                {{-- <div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    @endif
                </div> --}}
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="flex items-center">
                    <button form="delete-form"
                        class="text-gray-200 font-semibold bg-red-600 px-4 py-2 rounded-md text-sm hover:bg-red-500 transition duration-300">
                        Delete
                    </button>
                </div>
                <div class="flex items-center space-x-6">
                    <a href ="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <div>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>

                </div>

            </div>
    </form>
    <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
