<x-layout heading="Job">
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        {{-- this csrf will automatically checks that this token is valid before accepting the request --}}
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type='email' required :value="old('email')">
                            </x-form-input>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type='password' required>
                            </x-form-input>
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>



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

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>
                    Log in
                </x-form-button>
            </div>
    </form>

</x-layout>
