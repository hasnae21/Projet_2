@extends('main')
@section('title')
Liste des Apprenents
@endsection

@section('content')


@foreach ($promotion as $value)

<form action="{{url('updates')}}/{{$value->id}}" method="POST">
    @csrf

    <h2 class="text title" onclick="change()">Table Apprenants de la promotion : {{$value->name}}</h2>
    <br>
    <input type="hidden" class="inputHidden" value="{{$value->name}}" name="updt">
    <button> Modifier Promotion</button>
</form>

<div style="padding:55px 0">
<a href="{{url('add_forms')}}/{{$value->id}}">Ajouter Apprenant</a>
<br><br>
<input type="text" id="search" placeholder="Rechercher un apprenant" autocomplete="off">
<input type="hidden" value="{{$value->id}}" id="IdKey">
</div>
@endforeach


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
                <a href="{{url('edit_forms')}}/{{$value->id}}">Modifier</a>
                <a href="{{url('deletes')}}/{{$value->id}}">Supprimer</a>
            </td>

        </tr>
        @endforeach

    </tbody>

</table>
<br>


<a href="../">Retour</a>
@endsection


@section('script')
<script>
    let text = document.querySelector('.title');
    let input = document.querySelector('.inputHidden');

    function change() {
        text.style.display = "none"
        input.setAttribute("type", "text");

    }
</script>

<script src="{{asset('js/app_search.js')}}"></script>
@endsection
