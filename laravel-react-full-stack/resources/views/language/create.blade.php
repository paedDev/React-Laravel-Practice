<x-layout heading="Job">
    <x-slot:heading>
        Create Language
    </x-slot:heading>

    <form method="POST" action="/languages">
        {{-- this csrf will automatically checks that this token is valid before accepting the request --}}
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new language</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful details from you</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Philippines" required>
                            </div>
                        </div>
                        @error('title')
                            <p class="text-xs text-red-500 tracking-wider ml-1 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-4">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="description" id="description"
                                    class="block min-w-0 grow py-1.5 pr-3 px-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="The Philippines is an archipelago in Southeast Asia composed of over 7,000 islands"
                                    required>
                            </div>
                        </div>
                        @error('description')
                            <p class="text-xs text-red-500 tracking-wider ml-1 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                {{-- <div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $item)
                            <ul>
                                <li>{{ $item }}</li>
                            </ul>
                        @endforeach
                    @endif
                </div> --}}
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
    </form>


</x-layout>
