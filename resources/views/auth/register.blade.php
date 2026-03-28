<x-layout>
    <h2 class="text-center font-semibold pb-5">Register</h2>
    <x-forms.form method="post" action="/register" enctype="multipart/form-data">
       <x-forms.input name="name" label="name"/>
       <x-forms.input name="email" label="Email" type="email"/>
       <x-forms.input name="password" label="password" type="password"/>
       <x-forms.input name="password_confirmation" label="password" type="password"/>

       <x-forms.divider></x-forms.divider>


       <x-forms.input name="employer_name" label="employer"/>
       <x-forms.input name="employer_logo" label="logo" type="file"/>

       <x-forms.button type="submit">create Account</x-forms.button>

    </x-forms.form>
</x-layout>
