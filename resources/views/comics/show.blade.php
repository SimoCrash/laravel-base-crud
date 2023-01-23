@extends('layouts.base')

@section('title')
    Il titolo del fumetto è : {{ $comic->title }}
@endsection

@section('content')
    <ul>
        <li>ID:{{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
        <li>Serie: {{ $comic->series }}</li>
    </ul>
@endsection