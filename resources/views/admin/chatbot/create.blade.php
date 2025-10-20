@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Añadir Nueva Pregunta') }}
    </h2>
@endsection

@section('content')
    <form action="{{ route('admin.chatbot.store') }}" method="POST">
        @csrf
        @include('admin.chatbot.form')
    </form>
@endsection