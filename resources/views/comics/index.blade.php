@extends('layout')

@section('content')
<h1 class="text-center">vista Index</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITLE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">THUMB</th>
      <th scope="col">PRICE</th>
      <th scope="col">SERIES</th>
      <th scope="col">SALES DATE</th>
      <th scope="col">TYPE</th>
      <th>MODIFICA</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic )
    <tr>
      <th scope="row">{{$comic->id}}</th>
      <td><a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a></td>
      <td>{{$comic->description}}</td>
      <td>{{$comic->thumb}}</td>
      <td>{{$comic->price}}</td>
      <td>{{$comic->series}}</td>
      <td>{{$comic->sales_date}}</td>
      <td>{{$comic->type}}</td>
      <td class="d-flex align-items-center gap-4">
        <a href="{{route('comics.edit', $comic)}}">Edit</a>
        <form action="{{route('comics.destroy', $comic)}}" method="POST">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger">TRASH</button>
        </form>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
