@extends('main')
@section('title')
Ajouter un Apprenent
@endsection

@section('content')

<p> Ajouter un Apprenent</p>


            <form  action="/adds"   method="POST">
                @csrf

                    <label  for="1">Nom Apprenent :</label>
                    <input type="text" name="nom" id="1" >

                    <label for="2">Prenom Apprenent:</label>
                    <input type="text"  name="prenom" id="2" >


                  <label for="3">Email Apprenent:</label>
                  <input type="text"  name="email" id="3" >


                <input type="hidden" value="{{$id}}" name="promo_id">
                <button type="submit">Ajouter</button>

              </form>


        <div style="color:red;">
        @error('new')
        <span>{{$message}}</span>
        @enderror
    </div>

<br>
    <a href="../">Retour</a>


@endsection
