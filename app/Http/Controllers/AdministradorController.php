<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdministradorController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        return view('admin.index', compact('total_usuarios'));
    }
}
