<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Jugadores</h2>
        <a href="{{ route('players.create') }}" class="btn btn-primary mb-3">Agregar Jugador</a>

        @if ($players->isEmpty())
            <p>No hay jugadores registrados.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Posición</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->fecha_nacimiento }}</td>
                            <td>{{ $player->position }}</td>
                            <td>
                                <a href="{{ route('players.edit', $player) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('players.destroy', $player) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
</body>
</html>