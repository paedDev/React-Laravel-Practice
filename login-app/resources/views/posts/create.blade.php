<x-layout>
    <x-slot:heading>
        Create Post
    </x-slot:heading>
    <form method="POST" action="/posts">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Post About</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                    you share.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-fields>
                        <x-label for="title">
                            Title
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="The Little Giant" required>
                            </x-form-input>
                            <x-error-form name="title" />
                        </div>
                    </x-form-fields>
                    <x-form-fields>
                        <x-label for="description">
                            Description
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="description" id="description" placeholder="Tell me about the title"
                                required>
                            </x-form-input>
                            <x-error-form name="description" />
                        </div>
                    </x-form-fields>

                </div>
                <div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about anything.</p>
                </div>

            </div>

        </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>
