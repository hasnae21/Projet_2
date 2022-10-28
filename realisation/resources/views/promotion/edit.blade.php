@extends('main')
@section('title')
Lste des Apprenents
@endsection

@section('content')

@foreach ($promotion as $value)

<form action="{{url('update')}}/{{$value->id}}" method="POST">
    @csrf
    <input type="text" value="{{$value->name}}" name="updt">
    <button>Ajouter</button>
</form>

@endforeach

<h1>Table Apprenants</h1>
<br>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom </th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody id="tbody">
        @foreach ($apprenant as $value)

        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->nom}}</td>
            <td>{{$value->prenom}}</td>
            <td>{{$value->email}}</td>
            <td>
                <a href="{{url('edit_forms')}}/{{$value->id}}" class="edit">Modifier</a>
                <a href="{{url('deletes')}}/{{$value->id}}" class="delete">Supprimer</a>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>
<br>
<a href="../">Retour</a>
@endsection
