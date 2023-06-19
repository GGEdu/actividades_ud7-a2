@extends('layouts.layout')

@section('title')
    Bienvenido
@endsection

@section('content')
    @php
        $userName = Cookie::get('user_name');
    @endphp
    @if ($userName)
        <p>Hola, {{ $userName }}!</p>
    @else
        <p>Bienvenido a nuestro sitio.</p>
    @endif
@endsection
