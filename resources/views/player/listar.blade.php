<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde listar</h1>

    <table>

        @foreach ($players as $player)
        {{-- creo una fila --}}
        <tr>
            <td>{{$player->id}}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->fecha_nacimiento}}</td>
            <td>{{$player->position}}</td>
            <td><a href="{{route('player.show',$player->id)}}">Mostrar</a></td>
            <td><a href="{{route('player.edit',$player->id)}}">Editar</a></td>
            <td>
                <form action="{{route('player.destroy',$player->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>