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
        $save = function(Request $request, string $tipo): bool {
            if ($tipo == 'insert') {
                $nota = new notas();
                $nota->visitas = 1;
            } else if ($tipo == 'update') {
                $nota = notas::Find($request->id);
                $nota->visitas = $nota->visitas;
            }

            if (isset($request->imagen)) {
                $path = "public/imagenes/principales";
                $imagen = $request->file('imagen')->store($path);
                $imagen = substr($imagen, 7, strlen($imagen) - 1);
                if ($imagen !== false) {
                    $nota->imagen = $imagen;
                }
            }

            $nota->titulo = $request->titulo;
            $nota->id_autor = $request->id_autor;
            $nota->contenido = $request->contenido;
            $nota->descripcion = $request->descripcion;
            $nota->fecha_nota = $request->fecha_nota;
            $nota->fecha_publicacion = $request->fecha_publicacion;
            $nota->status = $request->status;
            $nota->url = $request->url;

            return $nota->save();
        };

        if (isset($request->id)){
            $resqponse = $save($request, 'update');
        } else {
            $resqponse = $save($request, 'insert');
        }

        if ($resqponse) {
            return redirect(route('notas'));
        } else {
            if (isset($request->id)) {
                // return redirect(route('notas.edit', ['id' => $request->id]))->withErrors('No se pudo actualizar el autor.');
                return redirect(route('notas.edit', ['id' => $request->id]))->back()->onlyInput();
            } else {
                // return redirect(route('notas.new'))->withErrors('No se pudo agregar el autor.');
                return redirect(route('notas.new'))->withErrors('No se pudo agregar.');
            }
        }
    }
}
