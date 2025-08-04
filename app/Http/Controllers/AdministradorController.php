<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enfermero;
use App\Models\Paciente;

class AdministradorController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        $total_enfermeros = Enfermero::count();
        $total_pacientes = Paciente::count();       

        return view('admin.index', compact('total_usuarios', 'total_enfermeros', 'total_pacientes'));
        
    }

    
}
