@extends('layouts.app')

@section('cdn')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection

@section('page-name', 'Lista delle canzoni')

@section('main-content')

<div class="row my-2">
  <form class="d-flex col-6 my-lg-0">
    <input class="form-control me-2" name="term" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </form>

  <div class="col-6">
    <a href="{{ route('musics.create') }}" class="btn btn-outline-success ms-2" type="submit">Aggiungi Canzone</a>
  </div>
</div>

<table class="table table-dark table-striped my-3">
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
        <td>
          <a href="{{ route('musics.show', ['music' => $music]) }}">
            <i class="bi bi-box-arrow-up-right"></i>
          </a>
        </td> 
      </tr>
    @endforeach
  </tbody>
</table>

{{ $musics->links("pagination::bootstrap-5") }}
@endsection