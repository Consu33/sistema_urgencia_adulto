<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminisionController extends Controller
{
    public function index(){
        //Del modelo usuario traera todos los datos que seran almacenados en esta variable
        //En este caso se asume que se mostraran las admisiones de los usuarios
        $admisiones = User::all();
        return view('admin.admisiones.index', compact('admisiones'));
    }

    public function create(){
        //Retorna la vista para crear una nueva admision
        return view('admin.admisiones.create');
    }

    public function store(Request $request){
        //Valida los datos del formulario
        $request->validate([
            'name' => 'required|max:50',
            'apellido' => 'required|max:50',
            'rut' => 'required|max:12|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        //Inserción a la base de datos
        $admision = new User();
        $admision->name = $request->name;
        $admision->apellido = $request->apellido;
        $admision->rut = $request->rut;
        $admision->password = Hash::make($request->password);
        $admision->save();

        return redirect()->route('admin.admisiones.index')
        ->with('mensaje','Registro Exitoso!')
        ->with('icono','success');
    }

    public function show($id){
        //Muestra los detalles de una admision especifica
        $admision = User::findOrFail($id);
        return view('admin.admisiones.show', compact('admision'));
    }

    public function edit($id){
        //Muestra el formulario para editar una admision
        $admision = User::findOrFail($id);
        return view('admin.admisiones.edit', compact('admision'));
    }

    //permite traer todo lo que esta en el formulario de edicion
    public function update(Request $request, $id){
        $admision = User::find($id);
        //Valida los datos del formulario
        $request->validate([
            'name' => 'required|max:50',
            'apellido' => 'required|max:50',
            'rut' => 'required|max:12|unique:users,rut,'.$admision->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        //Actualiza los datos de la admision
        $admision->name = $request->name;
        $admision->apellido = $request->apellido;
        $admision->rut = $request->rut;
        if($request->filled('password')) {
            // Solo actualiza la contraseña si se ha proporcionado una nueva
            $admision->password = Hash::make($request['password']);
        }
        
        $admision->save();

        return redirect()->route('admin.admisiones.index')
        ->with('mensaje','Registro Actualizado!')
        ->with('icono','success');
    }

    public function confirmDelete($id){
        //Muestra la vista de confirmación de eliminación
        $admision = User::findOrFail($id);
        return view('admin.admisiones.delete', compact('admision'));
    }

    public function destroy($id){
        //Elimina una admision
        $admision = User::findOrFail($id);
        $admision->delete();

        return redirect()->route('admin.admisiones.index')
        ->with('mensaje','Registro Eliminado!')
        ->with('icono','warning');
    }
}


