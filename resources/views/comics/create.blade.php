@extends('layouts.base')

@section('title', 'Inserisci una nuova casa')

@section('content')
    <form method="post" action="{{ route('comics.store') }}">
        @csrf()
        <div class="mb-3">
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" id="title" placeholder="title">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" aria-describedby="emailHelp" name="description" id="description" placeholder="description"> 
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" aria-describedby="emailHelp" name="thumb" id="thumb" placeholder="thumn"> 
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" aria-describedby="emailHelp" name="price" id="price" placeholder="price" step="0.01"> 
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" aria-describedby="emailHelp" name="series" id="series" placeholder="series"> 
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" aria-describedby="emailHelp" name="sale_date" id="sale_date" placeholder="sale_date"> 
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" aria-describedby="emailHelp" name="type" id="type" placeholder="type"> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection