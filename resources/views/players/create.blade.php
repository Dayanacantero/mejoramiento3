@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Jugador</h2>

        <!-- Formulario de creación -->
        <form action="{{ route('players.store') }}" method="POST">
            @csrf

            <!-- Campos del formulario -->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <!-- Otros campos del formulario -->

            <button type="submit" class="btn btn-primary">Crear Jugador</button>
        </form>
    </div>
@endsection

