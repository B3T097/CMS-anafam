<?php

namespace App\Http\Controllers;

use App\Models\autores;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = DB::table('autores')->get();
        foreach ($autores as $i => $autor ) {
            $autores[$i]->imagen = Storage::url($autor->imagen);
        }
        return view('components.bodyTemplate', ['viewComponent' => 'cms.autores.index', 'autores' => $autores]);
    }

    public function nuevo()
    {
        return view('components.bodyTemplate', ['viewComponent' => 'cms.autores.crud']);
    }

    public function editar(Request $request)
    {
        $id = (int)$request->id;
        if ($id !== 0) {
            return view('components.bodyTemplate', ['viewComponent' => 'cms.autores.crud'])->with('id', $id);
        } else {
            return $this->index();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $imagen = $request->file('imagen')->store('public/imagenes');
        if ($imagen !== false) {
            $imagen = substr($imagen, 7, strlen($imagen) - 1);
            $autor = new autores();
    
            $autor->nombre = $request->nombre;
            $autor->correo = $request->correo;
            $autor->imagen = $imagen;
            $autor->grado_academico = $request->grado_academico;
            $autor->nacionalidad = $request->nacionalidad;
            $autor->facebook = $request->facebook;
            $autor->twitter = $request->twitter;
            $autor->linkedin = $request->linkedin;
    
            if ($autor->save()) {
                return redirect(route('autores'));
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autores $autores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, autores $autores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autores $autores)
    {
        //
    }
}
