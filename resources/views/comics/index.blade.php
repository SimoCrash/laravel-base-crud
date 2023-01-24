@extends('layouts.base')

@section('title', 'Listing Page')

@section('content')

@if(session('delete_success'))
  <div class="alert alert-success">
    {{ session('delete_success') }}
  </div>
@endif

{{-- ed è esattamente cosi che cambia, ora stampo il messaggio --}}
{{-- @if(session('delete_success'))
      <div class="alert alert-success">
        Il posto con id {{ session('delete_success') }} è stato eliminato correttamente
      </div>
     @endif --}}
<table class="table table-dark table-hover">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td><img src="{{ $comic->thumb }}" alt=""></td>
                    <td>{{ $comic->price }} €</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        {{-- <a href="/comics/{{ $comic->id }}" class="btn btn-primary">Visita</a> --}}
                        <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Visit</a>
                    </td>
                    <td>
                        <a href="{{ route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                      <form action="{{ route('comics.destroy', ['comic' => $comic])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                </tr>
            @endforeach 
        </tbody>
      </table>
  </table>
  {{-- per la paginazione  --}}
  {{ $comics->links() }}
@endsection