<html>
<body>

@foreach ($promoid as $value)

    <form action="{{url('update')}}/{{$value->id}}" method="POST">
        @csrf

        <input type="text" value="{{$value->name}}" name="input">
        <button >Ajouter</button>
        
    </form>

@endforeach
    
</body>
</html>
