@extends('main')
@section('title')
Ajouter un Apprenent
@endsection

@section('content')



<p> Ajouter un Apprenent</p>


<form action="{{url('adds')}}" method="POST" class="namee">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="name" for="inputEmail4">Nom :</label>
            <input type="text" name="name" class="form-control cadre" id="inputEmail4" placeholder="name">
        </div>
        <div class="form-group col-md-6 ">
            <label class="name" for="inputPassword4">Prenom :</label>
            <input type="text" name="prenom" class="form-control cadre" id="inputPassword4" placeholder="Prenom">
        </div>
    </div>
    <div class="form-group">
        <label class="name" for="inputAddress">Email :</label>
        <input type="text" name="email" class="form-control cadree" id="inputAddress" placeholder="Email">
    </div>
    <input type="hidden" value="{{$id}}" name="promo_id">
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>




@endsection
