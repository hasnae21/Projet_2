@extends('main')
@section('title')
Home
@endsection

@section('content')


<h1>Table promotions</h1>

<div style="padding:25px 0">
    <a href="add_form">Ajouter une promotion</a>
    <br>
    <input type="text" id="searchbypromoname" placeholder="Rechercher une promotion" autocomplete="off" >
</div>


<!-- message de validation -->
@if(Session::has('success'))
<div role="alert">
    {{ Session::get('success') }}
</div>
@endif
<!--  -->


<div id="ajax_search_result">
    <br>
    <table class="table  table-hover">
        <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>nom de la promotion</th>
                <th>Apprenants</th>
            </tr>
        </thead>
        <tbody id="tbody">

            @if(!@empty($data))
            @php $i=1; @endphp
            @foreach ($data as $value)

            <tr>
                <td>
                    <a href="delete/{{$value->id}}">Supprimer</a>
                    <a href="">Modifier</a></td>
                </td>

                <td>{{$i}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <a href="edit_form/{{$value->id}}">Apprenants</a>
                </td>
            </tr>

            @php $i++; @endphp
            @endforeach
            @endif


        </tbody>
    </table>

    <br>
    {{ $data->links() }}

    <!--  -->

</div>


@endsection



@section('script')
<script src="{{asset('js/promo_search.js')}}"></script>
@endsection
