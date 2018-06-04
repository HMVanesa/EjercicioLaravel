@extends('layout')

@section('title', 'Listado de películas')

@section('content')
  <ul>
    @foreach ($movies as $unaPeli)
      <li>
        {{ $unaPeli->title }}
        <a href="/movie/{{$unaPeli->id}}" class="btn btn-success">ver detalle</a>
      </li>
      <br>
    @endforeach
@endsection
