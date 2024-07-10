<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
 

    public function index()
    {
        $equipment = Equipment::orderBy('id', 'name', 'city', 'stadium', 'aforo', 'year')->get();
        return view('equipment.listar', compact('equipment'));
        //return  $cursos;
    }

    public function create()
    {
        return view('equipment.create');
    }

    public function store(Request $request)
    {

        $equipment= new Equipment();
        $equipment->name=$request->name;
        $equipment->city=$request->city;
        $equipment->stadium=$request->stadium;
        $equipment->aforo=$request->aforo;
        $equipment->year=$request->year;
        $equipment->save();
        return $equipment;
    }

    public function show(Equipment $equipment)
    {
        return view('equipment.show', compact('equipment'));
    }

    public function edit(Equipment $equipment)
    {
        return view('equipment.edit',compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $equipment->name = $request->name;
        $equipment->city = $request->city;
        $equipment->stadium = $request->stadium;
        $equipment->aforo = $request->aforo;
        $equipment->year = $request->year;
        $equipment->save();
        return redirect()->route('equipment.index');
    }

    public function destroy(Equipment $equipment)
    {

        $equipment->delete();
        return redirect()->route('equipment.index');
    }
}
