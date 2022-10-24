@foreach ($promotion as $value)


<body>
    <form action="{{url('modifier')}}/{{$value->id}}" method="POST">
        @csrf

        <input type="text" value="{{$value->name_promotion}}" name="name">
        <button >Ajouter</button>
    </form>
</body>
@endforeach
</html>
