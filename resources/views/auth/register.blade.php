<x-layout>
    <x-forms.form method="post" action="/register">
       <x-forms.input name="name" label="name"/>
       <x-forms.input name="email" label="Email" type="email"/>
       <x-forms.input name="password" label="password" type="password"/>
       <x-forms.input name="password_confirmation" label="password" type="password"/>
       <x-forms.button type="submit">register</x-forms.button>
    </x-forms.form>
</x-layout>
