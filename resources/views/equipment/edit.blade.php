<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="{{route('equipment.update', $equipment)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('Name',$equipment->name) }}">
        <br>
        </label>
        <br>
        <label>
        Ciudad:
        <br>
        <input name="city" type="text" value="{{old('city',$equipment->city)}}">
        <br>
        </label>
        <br>
        <label>
        Estadio:
        <br>
        <input name="stadium" type="text" value="{{old('stadium',$equipment->stadium)}}">
        <br>
        </label>
        <br>
        <br>
        <label>
        Aforo:
        <br>
        <input name="aforo" type="text" value="{{old('aforo',$equipment->aforo)}}">
        <br>
        </label>
        <br>
        <br>
        <label>
        Año:
        <br>
        <input name="year" type="text" value="{{old('year',$equipment->year)}}">
        <br>
        </label>
        <br>
        <br>

        
       
        <button  type="submit">Actualizar Curso</button>
       
    </form>
</body>
</html>