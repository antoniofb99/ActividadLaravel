@extends('app')

@section('title', 'Modificacion de Libro')

@section('content')

    <form action="{{ route('modifyLibro') }}" method="POST">
        @csrf
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center space-x-5">
                            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                <h2 class="leading-relaxed">¿Que deseas modificar?</h2>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Titulo</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Titulo" name="titulo" value="{{ $libro->titulo }}">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Autor</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Autor" name="autor" value="{{ $libro->autor }}">
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose">Genero</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Genero" name="genero" value="{{ $libro->genero }}">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Fecha</label>
                                <input type="number"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                    placeholder="Fecha" name="fecha" value="{{ $libro->fecha }}">
                            </div>
                            <div class="pt-4 flex items-center">
                                <button type="submit"
                                    class="bg-orange-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Modificar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
