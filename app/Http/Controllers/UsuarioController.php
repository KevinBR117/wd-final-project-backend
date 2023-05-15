<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        $usuario = new Users();
        $usuario->correo = $request->get('correo');
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');

        $usuario->save();
        return response()->json(['success' => true]);
    }

    public function show(Users $usuario)
    {
    }

    public function edit(Users $usuario)
    {
    }

    public function update(Request $request, Users $usuario)
    {
    }

    public function destroy(Users $usuario)
    {
    }
}
