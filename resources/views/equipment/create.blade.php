<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Equipo</h1>

<form action="{{route('equipment.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ciudad:
    <br>
    <input type="text" name="city">
</label>
<br>
<label>
    Estadio:
    <br>
    <input type="text" name="stadium">
</label>
<br>
<label>
    Aforo:
    <br>
    <input type="text" name="aforo">
</label>
<br>
<label>
    Año:
    <br>
    <input type="text" name="year">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>