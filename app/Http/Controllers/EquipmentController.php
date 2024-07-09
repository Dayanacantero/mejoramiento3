<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
 

    public function index()
    {
        $equipment = Equipment::all();
        return view('equipment.index', compact('equipment'));
    }

    public function create()
    {
        return view('equipment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'stadium' => 'required',
            'aforo' => 'required',
            'year' => 'required',
        ]);

        Equipment::create($request->all());

        return redirect()->route('equipment.index')
                         ->with('success', 'Equipo creado exitosamente.');
    }

    public function show(Equipment $equipment)
    {
        return view('equipment.show', compact('equipment'));
    }

    public function edit(Equipment $equipment)
    {
        return view('equipment.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'stadium' => 'required',
            'aforo' => 'required',
            'year' => 'required',
        ]);

        $equipment->update($request->all());

        return redirect()->route('equipment.index')
                         ->with('success', 'Equipo actualizado exitosamente.');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect()->route('equipment.index')
                         ->with('success', 'Equipo eliminado exitosamente.');
    }
}
