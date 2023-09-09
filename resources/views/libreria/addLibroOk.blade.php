@extends('app')

@section('title',"Respuesta Formulario")

@section('content')
   @if ($idLibro>0)
   <p>Se ha añadido correctamente</p>
   @else
   <p>Ha ocurrido un error </p>    
   @endif
@endsection 

