@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header fw-bold" style="background-color: #f8f9fa;">Añadir Nueva Pregunta</div>
                <div class="card-body">
                    <form action="{{ route('admin.chatbot.store') }}" method="POST">
                        @csrf
                        @include('admin.chatbot.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection