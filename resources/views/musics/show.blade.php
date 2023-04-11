@extends('layouts.app')

@section('page-name', 'Dettaglio canzone')

@section('main-content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ $music->poster }}" class="img-fluid" alt="Poster della canzone">
      </div>
      <div class="col-md-8">
        <h2 class="mb-4">{{ $music->title }}</h2>
        <table class="table">
          <tbody>
            <tr>
              <td><strong>Album:</strong></td>
              <td>{{ $music->album }}</td>
            </tr>
            <tr>
              <td><strong>Artista:</strong></td>
              <td>{{ $music->author }}</td>
            </tr>
            <tr>
              <td><strong>Editore:</strong></td>
              <td>{{ $music->editor }}</td>
            </tr>
            <tr>
              <td><strong>Durata:</strong></td>
              <td>{{ $music->length }} min</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection