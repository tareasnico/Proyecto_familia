@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold" style="color: #4a2472;">
            <i class="bi bi-robot"></i> Administrar Chatbot
        </h2>
        <a href="{{ route('admin.chatbot.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nueva pregunta
        </a>
    </div>

    {{-- Filtro por categoría --}}
    <form method="GET" class="mb-4">
        <div class="d-flex align-items-center gap-2">
            <select name="categoria_filtro" class="form-select w-auto">
                <option value="">-- Ver todas las categorías --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria }}" {{ $categoriaSeleccionada == $categoria ? 'selected' : '' }}>
                        {{ $categoria }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-outline-primary">
                <i class="bi bi-filter"></i> Filtrar
            </button>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif

    @if($qas->isEmpty())
        <div class="alert alert-info text-center py-4">
            No hay preguntas registradas en esta categoría 🤖<br>
            ¡Agregá una nueva desde el botón verde arriba!
        </div>
    @else
        <div class="row g-4">
            @foreach($qas as $qa)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-dark fw-bold">{{ $qa->question }}</h5>
                            <p class="text-muted small mb-2">
                                <i class="bi bi-tag"></i> {{ $qa->category }}
                            </p>
                            <p class="flex-grow-1" style="font-size: 0.9rem;">{{ Str::limit($qa->answer, 150) }}</p>

                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('admin.chatbot.edit', $qa) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('admin.chatbot.destroy', $qa) }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar esta pregunta?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection