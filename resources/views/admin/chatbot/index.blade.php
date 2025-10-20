@extends('layouts.admin')

@section('header')
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Control del Chatbot') }}
        </h2>
        <a href="{{ route('admin.chatbot.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">
            Añadir Nueva Pregunta
        </a>
    </div>
@endsection
@section('content')
    
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Categoría
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Pregunta
                    </th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($qas as $qa)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $qa->category }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ Str::limit($qa->question, 60) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.chatbot.edit', $qa) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Editar</a>
                            <form action="{{ route('admin.chatbot.destroy', $qa) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Seguro que quieres eliminar esta pregunta?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            No hay preguntas creadas todavía.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection