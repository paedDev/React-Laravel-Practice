<x-layout>
    <x-slot:heading>
        Register Page
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">

                <div class=" grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <x-form-fields>
                        <x-label for="first_name">
                            First Name
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" required>
                            </x-form-input>
                            <x-error-form name="first_name" />
                        </div>
                    </x-form-fields>
                    <x-form-fields>
                        <x-label for="last_name">
                            Last Name
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" required>
                            </x-form-input>
                            <x-error-form name="last_name" />
                        </div>
                    </x-form-fields>
                    <x-form-fields>
                        <x-label for="student_id">
                            Student Id
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="student_id" id="student_id" required>
                            </x-form-input>
                            <x-error-form name="student_id" />
                        </div>
                    </x-form-fields>
                    <x-form-fields>
                        <x-label for="email">
                            Email
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" required type="email">
                            </x-form-input>
                            <x-error-form name="email" />
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
                    <x-form-fields>
                        <x-label for="password_confirmation">
                            Confirm Passowrd
                        </x-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" required
                                type="password">
                            </x-form-input>
                            <x-error-form name="password_confirmation" />
                        </div>
                    </x-form-fields>

                </div>
            </div>

        </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
    </form>

</x-layout>
