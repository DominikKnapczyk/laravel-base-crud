@extends('layouts.app')

@section('page-name', 'Nuova canzone')

@section('main-content')

<form action="{{ route('musics.store') }}" method="POST" class="row g-2 gx-5">
 @csrf

  <div class="col-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="col-3">
    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control" id="album" name="album">
  </div>

  <div class="col-3">
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control" id="author" name="author">
  </div>

  <div class="col-3">
    <label for="editor" class="form-label">Editore</label>
    <input type="text" class="form-control" id="editor" name="editor">
  </div>

  <div class="col-3">
    <label for="length" class="form-label">Lunghezza</label>
    <input type="text" class="form-control" id="length" name="length">
  </div>

  <div class="col-3">
    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control" id="poster" name="poster">
  </div>

  <button class="btn btn-outline-success col-12 my-5" type="submit">Aggiungi</button>

</form>

@endsection