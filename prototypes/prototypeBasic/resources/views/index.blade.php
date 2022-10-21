<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <a href="/form">ajouter</a>
    <thead>
            <th>ID</th>
            <th>Name</th>
    </thead>
    <tbody>

        
        @forelse ($promotion as $value )

       <tr>
         <td>{{$value->id}}</td>
         <td>{{$value->name}}</td>
       </tr>

       @empty

       @endforelse
       
    </tbody>
</table>
</body>
</html>