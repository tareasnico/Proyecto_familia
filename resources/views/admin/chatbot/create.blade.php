@extends('layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-2xl font-bold p-6 bg-white border-b">Añadir Nueva Pregunta</h1>
            
            <form action="{{ route('admin.chatbot.store') }}" method="POST">
                @csrf
                @include('admin.chatbot.form')
            </form>

        </div>
    </div>
</div>
@endsection