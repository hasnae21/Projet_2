@foreach ($promoid as $value)


<body>
    <form action="{{url('update')}}/{{$value->id}}" method="POST">
        @csrf

        <input type="text" value="{{$value->name}}" name="input">
        <button >Ajouter</button>
    </form>
</body>
@endforeach
</html>
