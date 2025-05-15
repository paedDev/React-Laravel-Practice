<x-layout>
    <x-slot:heading>
        Login Page
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">


                <x-form-fields>
                    <x-label for="student_id">
                        Student Id
                    </x-label>
                    <div class="mt-2">
                        <x-form-input name="student_id" id="student_id" required :value="old('student_id')">
                        </x-form-input>
                        <x-error-form name="student_id" />
                    </div>
                </x-form-fields>

                <x-form-fields>
                    <x-label for="password">
                        Password
                    </x-label>
                    <div class="mt-2">
                        <x-form-input name="password" id="password" required type="password">
                        </x-form-input>
                        <x-error-form name="password" />
                    </div>
                </x-form-fields>


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
