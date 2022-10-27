<html>
    <body>
        <p>
            <a href="add_form">Ajouter une promotion</a>
            <input type="text" name="" id="search_promo" placeholder="Rechercher une promotion">
        </p>


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


        <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>

        <script src="{{asset('js/search_ajax.js')}}"></script>
        
    </body>
</html>
