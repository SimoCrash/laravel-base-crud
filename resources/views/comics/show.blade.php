@extends('layouts.base')

@section('title')
    Il titolo del fumetto è : {{ $comic->title }}
@endsection

@section('content')
    <ul>
        <li>ID:{{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Indirizzo img: {{ $comic->thumb }}</li>
        <li>Prezzo: {{ $comic->price }}</li>
        <li>Serie: {{ $comic->series }}</li>
        <li>Data Vendita: {{ $comic->sale_date }}</li>
        <li>Tipo: {{ $comic->type }}</li>
    </ul>
@endsection