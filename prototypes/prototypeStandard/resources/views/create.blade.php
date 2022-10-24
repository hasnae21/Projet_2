<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form action="ajouter" method="POST">
        @csrf
        <input type="text" name="name">
        <button >Ajouter</button>
    </form>
</body>
</html>