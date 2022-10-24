<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="name">
        <button >Ajouter</button>
    </form>
</body>
</html>