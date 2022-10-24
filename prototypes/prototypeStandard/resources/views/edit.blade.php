@foreach ($promo as $value)


<body>
    <form action="{{url('update')}}/{{$value->id}}" method="POST">
        @csrf

        <input type="text" value="{{$value->name}}" name="name">
        <button >Ajouter</button>
    </form>
</body>
@endforeach
</html>
