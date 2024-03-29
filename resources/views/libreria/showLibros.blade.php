@extends('app')

@section('title',"Listado de libros")

@section('content')

@if ($libros->isEmpty())
<p>No existen Libros registrados</p>
    

@else
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-center text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr class="bg-orange-300">
             <th scope="col" class="px-6 py-4">Titulo</th>
             <th scope="col" class="px-6 py-4">Autor</th>
             <th scope="col" class="px-6 py-4">Genero</th>
             <th scope="col" class="px-6 py-4">Fecha</th>
             <th scope="col" class="px-6 py-4">Opciones</th>
        </tr>
    </thead>
    <tbody>@each('component.table',$libros ,'libro' )</tbody>
   
</table>






         


@endif
@endsection 

