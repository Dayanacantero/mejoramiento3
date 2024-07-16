<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $player = Player::orderBy('id', 'desc')->get();
        return view('player.listar', compact('players'));
        //return  $cursos;
    }

    // Método para mostrar el formulario de creación de jugadores
    public function create()
    {
        return view('player.create');
    }

    // Método para almacenar un nuevo jugador
    public function store(Request $request)
    {
        $player= new Player();
        $player->name=$request->name;
        $player->fecha_nacimiento=$request->fecha_nacimiento;
        $player->position=$request->position;
        $player->save();
        return $player;
    }
    public function show(Player $player) {
       
     
        return view('player.show', compact('player'));

    }
    public function edit(Player $player)
    {
        return view('player.edit',compact('player'));
    }

    // Método para actualizar un jugador
    public function update(Request $request, Player $player)
    {
        $player->name = $request->name;
        $player->fecha_nacimiento=$request->fecha_nacimiento;
        $player->position=$request->position;
        $player->save();
        return redirect()->route('player.index');
    }
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('player.index');
    }
}
