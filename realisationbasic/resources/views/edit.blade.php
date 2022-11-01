@extends('main')
@section('title')
Update Promotion 
@endsection

@section('content')

@foreach ($promo_id as $value)

    <form action="{{url('update')}}/{{$value->id}}" method="POST">
    @csrf
        <input type="text" value="{{$value->name}}" name="updt">
        <button >Ajouter</button>
    </form>

@endforeach


@endsection
