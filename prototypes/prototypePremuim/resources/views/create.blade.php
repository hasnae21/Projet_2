@extends('main')
@section('title')
New Promotion 
@endsection

@section('content')

    <form action="/add" method="POST">
        @csrf
        <input type="text" name="new" required>
        <button >Ajouter</button>

        <!-- @error('new')
        <span>{{$message}}</span>
        @enderror -->

    </form>

@endsection