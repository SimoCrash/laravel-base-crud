@extends('layouts.base')

@section('title', 'Inserisci una nuova casa')

@section('content')
    <form method="post" action="{{ route('comics.update', ['comic'=>$comic]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" id="title" placeholder="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="description" id="description" placeholder="description" value="{{ $comic->description }}"> 
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="url" class="form-control" aria-describedby="emailHelp" name="thumb" id="thumb" value="{{ $comic->thumb }}"> 
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="price" id="price" placeholder="price" step="0.01" value="{{ $comic->price }}"> 
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="series" id="series" placeholder="series" value="{{ $comic->series }}"> 
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" class="form-control" aria-describedby="emailHelp" name="sale_date" id="sale_date" placeholder="sale_date" value="{{ $comic->sale_date }}"> 
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="type" id="type" placeholder="type" value="{{ $comic->type }}"> 
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection