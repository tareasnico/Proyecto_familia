@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Pregunta') }}
    </h2>
@endsection

@section('content')
    <form action="{{ route('admin.chatbot.update', $qa) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.chatbot.form', ['qa' => $qa])
    </form>
@endsection