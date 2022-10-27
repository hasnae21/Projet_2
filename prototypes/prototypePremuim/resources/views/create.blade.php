@extends('main')
@section('title')
New Promotion 
@endsection

@section('content')
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="new">
        <button >Ajouter</button>
    </form>
@endsection