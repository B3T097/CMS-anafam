<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cmsController extends Controller
{
    public function bienvenida()
    {
        return view('components.bodyTemplate', ['viewComponent' => 'cms.index']);
    }

    public function nuevoUsuario()
    {
        return view('components.bodyTemplate', ['viewComponent' => 'cms.nuevoUsuario']);
    }

    public function nuevaNota()
    {
        return view('components.bodyTemplate', ['viewComponent' => 'cms.nuevaNota']);
    }
}
