@extends('layouts.app')

@section('title', 'Laravel')
<!-- Puede haber dos push, gracias a stack -->
@push('css')
    <style>
        p{
            color: red
        }
    </style>
@endpush

@section('content')
    <h1>welcome to the homepage</h1>

    <x-alert type="success" class="mb-4">
        <x-slot name="title">
            Esto es la pagina principal
        </x-slot>
        Contenido de la alerta 
    </x-alert>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <h2>h1</h2>
    <h3>h2</h3>
    <h4>h3</h4>
@endsection

    

