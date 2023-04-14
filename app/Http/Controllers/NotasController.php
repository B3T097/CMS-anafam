<?php

namespace App\Http\Controllers;

use App\Models\notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotasController extends Controller
{
    public function index()
    {
        $notas = DB::table('notas')->get();
        return view('components.bodyTemplate', ['viewComponent' => 'cms.notas.index', 'notas' => $notas]);
    }

    public function nuevo()
    {
        $autores = DB::table('autores')->get();
        return view('components.bodyTemplate', ['viewComponent' => 'cms.notas.crud', 'autores' => $autores]);
    }

    public function editar(Request $request)
    {
        $id = (int)$request->id;
        if ($id !== 0) {
            $autores = DB::table('autores')->get();
            $nota = [];
            if ($id !== 0)
                $nota = DB::table('notas')->get()->where('id', "=", $id)->first();
            return view('components.bodyTemplate', ['viewComponent' => 'cms.notas.crud', 'autores' => $autores, 'nota' => $nota])->with('id', $id);
        } else {
            return $this->index();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $path = "public/imagenes/principales";
        $imagen = $request->file('imagen')->store($path);
        if ($imagen !== false) {
            $imagen = substr($imagen, 7, strlen($imagen) - 1);

            $nota = new notas();
            
            $nota->titulo = $request->titulo;
            $nota->id_autor = $request->id_autor;
            $nota->contenido = $request->contenido;
            $nota->descripcion = $request->descripcion;
            $nota->fecha_nota = $request->fecha_nota;
            $nota->fecha_publicacion = $request->fecha_publicacion;
            $nota->imagen = $imagen;
            $nota->visitas = $request->visitas;
            $nota->status = $request->status;
            $nota->url = $request->url;
            $nota->visitas = 1;
    
            if ($nota->save()) {
                return redirect(route('notas'));
            } else {
                return redirect(route('notas'))->withErrors('No fue posible registrar la nueva nota');
            }
        } else {
            return redirect(route('notas'))->withErrors('No fue posible prosesar la imagen.');
        }
    }
}
