<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Libros extends Model
{
    use HasFactory;

    public static function create(Request $request){
        $libro = new Libros();
        $libro->titulo=$request->titulo;
        $libro->autor=$request->autor;
        $libro->genero=$request->genero;
        $libro->fecha=$request->fecha;
        $libro->save();

        return $libro->id;
    }

    public static function modify($id ,Request $request){
        $libro = Libros::find($id);
        $libro->titulo=$request->titulo;
        $libro->autor=$request->autor;
        $libro->genero=$request->genero;
        $libro->fecha=$request->fecha;
        $libro->save();
    }

    public static function destroy($id){
        $libro = Libros::find($id);
        $libro->delete();
    }
    public static function showLibros(){
        return Libros::all();
        
    }

    public static function findLibroId($id){
        return Libros::find($id);
    }
}
