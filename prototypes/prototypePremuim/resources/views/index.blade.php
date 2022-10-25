<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <a href="add_form">Ajouter une promotion</a>
        
        <table border="1px">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom de la promotion</th>
                    <th colspan="2">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promos as $value)

                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                        <a href="edit_form/{{$value->id}}">Modifier</a>
                        <a href="delete/{{$value->id}}">Supprimer</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </body>
    <script src="{{asset('ajax/script.js')}}"></script>
</html>
