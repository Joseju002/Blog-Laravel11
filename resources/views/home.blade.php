@extends('layouts.app')

@section('title', 'Título por plantilla')

@push('css')
    <style>
        body {
            background-color: rgb(170, 170, 170);
        }
    </style>
@endpush

@section('content')
    <div class="max-w-7xl mx-auto px-4">
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Título
            </x-slot>
            Contenido de la variable
        </x-alert2>
        <p>Hola mundo</p>
    </div>
@endsection