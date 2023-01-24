@extends('layouts.base')

@section('title')
    Il titolo del fumetto è : {{ $comic->title }}
@endsection

@section('content')

@if(session('create_success'))
    <div class="alert alert-success">
    Il posto con id {{ session('create_success') }} è stato creato correttamente.
    </div>
@endif

@if(session('update_success'))
    <div class="alert alert-success">
    Il posto con id {{ session('update_success') }} è stato modificato correttamente.
    </div>
@endif
    <ul>
        <li>ID:{{ $comic->id }}</li>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
        <li>Immagine di Copertina: <img src="{{ $comic->thumb }}" alt=""></li>
        <li>Prezzo: {{ $comic->price }} €</li>
        <li>Serie: {{ $comic->series }}</li>
        <li>Data Vendita: {{ $comic->sale_date }}</li>
        <li>Tipo: {{ $comic->type }}</li>
    </ul>
    <div>
        <a href="{{ route('comics.edit', ['comic' => $comic])}}" class="btn btn-warning">Edit</a>
    </div>
    <div>
        <form action="{{ route('comics.destroy', ['comic' => $comic])}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection