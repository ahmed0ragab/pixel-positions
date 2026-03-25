<x-layout>
    <x-forms.form method="post" action="/login">
       <x-forms.input name="email" label="Email" type="email"/>
       <x-forms.input name="password" label="password" type="password"/>
       <x-forms.button type="submit">Log in</x-forms.button>
    </x-forms.form>
</x-layout>
