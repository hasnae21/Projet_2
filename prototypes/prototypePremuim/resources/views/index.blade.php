@extends('main')
@section('title')
Home
@endsection

@section('content')

@if(Session::has('success'))
<div class="alert" role="alert">
{{ Session::get('success') }}
</div>

@endif

<p>
    <a href="add_form">Ajouter une promotion</a>
    <input type="text" name="" id="search_promo" placeholder="Rechercher une promotion">
</p>

<div id="ajax_search_result">

    <table border="1px">
        @if(!@empty($data))
        <thead>
            <tr>
                <!-- <th>##</th> -->
                <th>#</th>
                <th>nom de la promotion</th>
                <th colspan="2">actions</th>
            </tr>
        </thead>
        <tbody>
            
            @php $i=1; @endphp
                @foreach ($data as $value)

                <tr>
                    <!-- <td>{{$value->id}}</td> -->
                    <td>{{$i}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                        <a href="edit_form/{{$value->id}}">Modifier</a>
                        
                        <a href="delete/{{$value->id}}">Supprimer</a>
                    </td>
                </tr>

                @php $i++; @endphp
                @endforeach

                
            </tbody>
            @else
            @endif
        </table>
        
        <br>
        {{ $data->links() }}
</div>
@endsection
