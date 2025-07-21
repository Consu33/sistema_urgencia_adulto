<?php

namespace App\Http\Controllers;

use App\Models\Enfermero;
use Illuminate\Http\Request;

class EnfermeroController extends Controller
{
    
    public function index()
    {
        $enfermeros = Enfermero::with('user')->get();
        return view('admin.enfermeros.index', compact('enfermeros'));
    }

   
    public function create()
    {
        //Retorna la vista para crear una nuevo enfermero
        return view('admin.enfermeros.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Enfermero $enfermero)
    {
        //
    }

    
    public function edit(Enfermero $enfermero)
    {
        //
    }
    
    
    public function update(Request $request, Enfermero $enfermero)
    {
        //
    }

    
    public function destroy(Enfermero $enfermero)
    {
        //
    }
}
