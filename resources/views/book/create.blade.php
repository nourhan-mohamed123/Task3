<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>you can create book from here </h1>
<form action="{{route('book.create')}}" method="post">
@csrf
<label for="title">Title:</label>
<input type="text" name="name">


<label for="title">Description:</label>
<input type="text" name="description">

<textarea name="description"></textarea>
</form>
</body>
</html>
