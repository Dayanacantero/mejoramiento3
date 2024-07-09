<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    // Método para mostrar el formulario de creación de jugadores
    public function create()
    {
        return view('players.create');
    }

    // Método para almacenar un nuevo jugador
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'position' => 'required|string|max:255',
        ]);

        // Crear un nuevo jugador
        Player::create($request->all());

        // Redireccionar a la lista de jugadores con mensaje de éxito
        return redirect()->route('players.index')->with('success', 'Jugador creado correctamente.');
    }

    // Método para mostrar el formulario de edición de un jugador
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    // Método para actualizar un jugador
    public function update(Request $request, Player $player)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'position' => 'required|string|max:255',
        ]);

        // Actualizar el jugador
        $player>update($request->all());

        // Redireccionar a la lista de jugadores con mensaje de éxito
        return redirect()->route('players.index')->with('success', 'Jugador actualizado correctamente.');
    }

    // Método para eliminar un jugador
    public function destroy(Player $player)
    {
        // Eliminar el jugador
        $player->delete();

        // Redireccionar a la lista de jugadores con mensaje de éxito
        return redirect()->route('players.index')->with('success', 'Jugador eliminado correctamente.');
    }
}
