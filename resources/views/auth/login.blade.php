<x-layout>
    <x-form.heading>Log In</x-form.heading>

    <x-form.form method="POST" action="/login">
        <x-form.input label="Email or Username" name="email"/>
        <x-form.input label="Your password" name="password"/>

        <x-form.button>Log in</x-form.button>
    </x-form.form>

</x-layout>
