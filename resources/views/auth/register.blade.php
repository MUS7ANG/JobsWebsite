<x-layout>
    <x-form.heading>Register</x-form.heading>

    <x-form.form method="POST" action="/register" enctype="multipart/form-data">
        <x-form.input label="Your name" name="name"/>
        <x-form.input label="Email" name="email" type="email"/>
        <x-form.input label="Password" name="password" type="password"/>
        <x-form.input label="Password Confirmation" name="password-confirmation" type="password"/>

        <x-form.divider />

        <x-form.input label="Employer name" name="employer"/>
        <x-form.input label="Employer logo" name="logo" type="file"/>

        <x-form.button>Confirm</x-form.button>
    </x-form.form>

</x-layout>
