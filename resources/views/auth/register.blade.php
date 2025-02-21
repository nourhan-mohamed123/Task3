
<x-auth-layout>
<p>welcome to Register</p>
<x-slot:heading>Register</x-slot:heading>

<form :action="{{route('auth.handelRegister')}}" method ="post">
@csrf
<label for="email">Email</label>
<input id="name"type="text" name="name"placeholder = "name">

<br>
<label for="name">Name</label>
<input id="email"type="email" name="email"placeholder = "email">
</br><br>
<label for="password">password</label>
<input id="password"type="password" name="password"placeholder = "password">
</br>
<br>
    <input type="submit" value="submit">
</br>

</form>
<x-errors/>

</x-auth-layout>
