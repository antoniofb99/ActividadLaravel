<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;;

class LibrosController extends Controller
{

    public static function showFormAddLibro()
    {
        $titulo = "Añadir libro";
        return view("libreria.addLibroForm")->with(['titulo' => $titulo]);
    }

    public static function addLibroForm(Request $request)
    {
        $id_libro = Libros::create($request);
        return view("libreria.addLibroOk", ['idLibro' => $id_libro]);
    }

    public static function showLibros()
    {
        $libros = Libros::showLibros();
        return view('libreria.showLibros')->with('libros', $libros);
    }

    public function destroyLibro($id)
    {
        Libros::destroy($id);
        return Redirect::to('/showLibros');
    }

    public function modifyLibroForm($id)
    {
        $libro = Libros::findLibroId($id);
        Session::put('id', $id);
        return view('libreria.showDataLibroForm')->with('libro', $libro);
    }
    public function modifyLibro(Request $request)
    {
        $id = Session::get('id');
        Libros::modify($id, $request);
        return Redirect::to('/showLibros');
    }
}
