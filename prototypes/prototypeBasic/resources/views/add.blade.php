<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="name">
        <button type="submit">ajouter</button>
    </form>
</body>
</html>