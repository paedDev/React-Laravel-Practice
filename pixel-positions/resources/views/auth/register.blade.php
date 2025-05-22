<x-layout>
    <x-page-heading>Register</x-page-heading>
    <div>

        <form action="/register" method="post" class="w-xl mx-auto">
            @csrf
            <div class=" text-white flex flex-col space-y-2">
                <x-forms.label name="name" label="Your Name" />
                <input type="text" label="Name" name="name"
                    class="h-12 bg-white/10 rounded-xl border border-white/10 px-5">
                <x-forms.error name="name" />



                <x-forms.label name="email" label="Email" />


                <input type="email" label="Email" name="name">
                <label for="Password">Password</label>
                <input type="password" label="Password" name="password">
                <label for="Password_Confirmation">Password Confirmation</label>
                <input type="password" label="Password Confirmation" name="password_confirmation">

            </div>

        </form>

    </div>
</x-layout>
