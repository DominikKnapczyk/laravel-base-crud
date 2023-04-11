@extends('layouts.app')

@section('page-name', 'Lista delle canzoni')

@section('main-content')
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Album</th>
        <th scope="col">Autore</th>
        <th scope="col">Editore</th>
        <th scope="col">Lunghezza</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($musics as $music)    
        <tr>
          <th scope="row">{{ $music->id}}</th>
          <td>{{ $music->title}}</td>
          <td>{{ $music->album }}</td>
          <td>{{ $music->author }}</td>
          <td>{{ $music->editor }}</td>
          <td>{{ $music->length }} min</td>
          <td><a href="{{ route('musics.show', ['music' => $music]) }}">Dettaglio</a></td> 
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection