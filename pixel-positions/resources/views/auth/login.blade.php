<x-layout>
    <x-page-heading>Login Page</x-page-heading>
    <div>

        <form action="/login" method="post" class="w-xl mx-auto">
            @csrf
            <div class=" text-white flex flex-col space-y-2 mb-5">
                <x-forms.fields>
                    <x-forms.label name="email" label="Email" />
                    <x-forms.input type="email" name="email" />
                    <x-forms.error name="email" />
                </x-forms.fields>
                <x-forms.fields>
                    <x-forms.label name="password" label="Password" />
                    <x-forms.input type="password" name="password" />
                    <x-forms.error name="password" />
                </x-forms.fields>
            </div>
            <x-forms.button>
                Login
            </x-forms.button>
        </form>

    </div>
</x-layout>
