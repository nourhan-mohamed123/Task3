<x-auth-layout>
    <p>Welcome</p>

    <x-slot name="heading">Login</x-slot>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        
        <x-forms.input type="email" name="email" label="Email"/>
        <x-forms.input type="password" name="password" label="Password"/>
        
        <br> 
        
        <x-forms.submit type="submit">Login</x-forms.submit>
    </form>
</x-auth-layout>
