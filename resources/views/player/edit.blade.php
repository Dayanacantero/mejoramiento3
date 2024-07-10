<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="{{route('player.update', $player)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$player->name) }}">
        <br>
        </label>
        <br>
        <label>
        Fecha nacimiento:
        <br>
        <input name="fecha_nacimiento" type="text" value="{{old('fecha_nacimiento',$player->fecha_nacimiento)}}">
        <br>
        </label>
        <br>
        <label>
        Posicion:
        <br>
        <input name="position" type="text" value="{{old('position',$player->position)}}">
        <br>
        </label>
        <br>
        <br>

        
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
</body>
</html>