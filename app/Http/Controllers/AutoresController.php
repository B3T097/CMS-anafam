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
            $autor = DB::table('autores')->get()->where('id', "=", $id)->first();
            if ($autor !== null) {
                return view('components.bodyTemplate', ['viewComponent' => 'cms.autores.crud', 'autor' => $autor])->with('id', $id);
            } else {
                return redirect(route('autores'));
            }
        } else {
            return redirect(route('autores'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $save = function(Request $request, string $tipo): bool {
            if ($tipo == 'insert') {
                $autor = new autores();
            } else if ($tipo == 'update') {
                $autor = autores::Find($request->id);
            }

            if (isset($request->imagen)) {
                $path = "public/imagenes/autores";
                $imagen = $request->file('imagen')->store($path);
                if ($imagen !== false) {
                    $autor->imagen = $imagen;
                }
            }

            $autor->nombre = $request->nombre;
            $autor->correo = $request->correo;
            $autor->grado_academico = $request->grado_academico;
            $autor->nacionalidad = $request->nacionalidad;
            $autor->facebook = $request->facebook;
            $autor->twitter = $request->twitter;
            $autor->linkedin = $request->linkedin;

            return $autor->save();
        };

        if (isset($request->id)){
            $resqponse = $save($request, 'update');
        } else {
            $resqponse = $save($request, 'insert');
        }

        if ($resqponse) {
            return redirect(route('autores'));
        } else {
            if (isset($request->id)) {
                // return redirect(route('autores.edit', ['id' => $request->id]))->withErrors('No se pudo actualizar el autor.');
                return redirect(route('autores.edit', ['id' => $request->id]))->back()->onlyInput();
            } else {
                // return redirect(route('autores.new'))->withErrors('No se pudo agregar el autor.');
                return redirect(route('autores.new'))->back()->onlyInput();
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
