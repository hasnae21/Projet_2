@extends('main')
@section('title')
New Promotion
@endsection
@section('content')

<p >Ajouter Promotion</p>
    <form action="/add" method="POST">
    @csrf
        <input type="text" id="new" name="new">
        <button >Ajouter</button>
    </form>

    <div style="color:red;">
        @error('new')
        <span>{{$message}}</span>
        @enderror
    </div>
<br>
    <a href="../">Retour</a>
@endsection
