<html>
    <body>
        <a href="add_form">Ajouter une promotion</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom de promotion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $value)


                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                        <a href="edit_form/{{$value->id}}" class="btn btn-success">Modifier</a>
                        <a href="delete/{{$value->id}}" class="btn btn-success">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
