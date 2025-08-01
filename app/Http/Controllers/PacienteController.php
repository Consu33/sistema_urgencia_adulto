<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    
    public function create()
    {
        return view('admin.pacientes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'rut' => 'required|max:12|unique:pacientes'
        ]);

        //se crea un nuevo paciente con los datos del formulario
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->rut = $request->rut;
        $paciente->save();

        return redirect()->route('admin.pacientes.index')
            ->with('success', 'Paciente registrado exitosamente.')
            ->with('icono', 'success');
    }

    
    public function show($id)
    {
        //variable + modelo
        $paciente = Paciente::findOrFail($id);
        // retornamos a la vista que deseamos ver e informamos la variable
        return view('admin.pacientes.show', compact('paciente'));
    }

    
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.edit', compact('paciente'));
    }

    
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);

        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'rut' => 'required|max:12|unique:pacientes,rut,' .$paciente->id
        ]);

        //actualizamos los datos del paciente
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->rut = $request->rut;
        $paciente->save();

        return redirect()->route('admin.pacientes.index')
            ->with('mensaje', 'Paciente actualizado exitosamente.')
            ->with('icono', 'success');
    }

    public function confirmDelete($id)
    {
        //Muestra la vista de confirmación de eliminación
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.delete', compact('paciente'));
    }
    
    public function destroy($id)
    {
        //Elimina una admision
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Registro Eliminado!')
        ->with('icono','warning');
    }
}
