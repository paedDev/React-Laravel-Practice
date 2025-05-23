<x-layout>
    <x-page-heading>Register</x-page-heading>
    <div>

        <form action="/register" method="post" class="w-xl mx-auto" enctype="multipart/form-data">
            @csrf
            <div class=" text-white flex flex-col space-y-2 mb-5">
                <x-forms.fields>
                    <x-forms.label name="name" label="Your Name" />
                    <x-forms.input type="text" label="Name" name="name" />
                    <x-forms.error name="name" />
                </x-forms.fields>
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
                <x-forms.fields>
                    <x-forms.label name="password_confirmation" label="Password Confirmation" />
                    <x-forms.input type="password" name="password_confirmation" />
                    <x-forms.error name="password_confirmation" />
                </x-forms.fields>
                <x-forms.divider />

                <x-forms.fields>
                    <x-forms.label name="employer" label="Employer Name" />
                    <x-forms.input type="text" name="employer" />
                    <x-forms.error name="employer" />
                </x-forms.fields>
                <x-forms.fields>
                    <x-forms.label name="logo" label="Employer Logo" />
                    <x-forms.input type="file" name="logo" />
                    <x-forms.error name="logo" />
                </x-forms.fields>
            </div>

            <x-forms.button>
                Create Account
            </x-forms.button>

        </form>

    </div>
</x-layout>
