<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    @if (($error->any))
<div class="alert">
<ul>
    
@foreach ($errors ->all() as $error )
    <li>{{$error}}<li>
        @endforeach
    
</div>
@endif
</div>
<style>
    .alert{
        color: red;
    }
</style>