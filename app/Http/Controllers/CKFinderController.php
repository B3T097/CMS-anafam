<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKFinderController extends Controller
{
    public function saveImage(Request $request)
    {

        $res = array(
            'fileName' => '',
            'uploaded' => 1,
            'url' => ''
        );

        $path = "public/imagenes/notas";
        $return = "/storage/imagenes/notas/";
        $imagen = $request->file('upload')->store($path);
        if ($imagen !== false) {
            $arr_ruta = explode('/', $imagen);
            $nombre = $arr_ruta[count($arr_ruta) - 1];
            $res = array(
                'fileName' => $nombre,
                'uploaded' => 1,
                'url' => $return . $nombre
            );
            return json_encode( $res );
        } else {
            return json_encode( $res );
        }
    }
}