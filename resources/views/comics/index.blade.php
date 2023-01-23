@extends('layouts.base')

@section('title', 'Listing Page')

@section('content')
<table class="table table-dark table-hover">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a href="/comics/{{ $comic->id }}" class="btn btn-primary">Visita</a>
                        <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Visita</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
  </table>
@endsection