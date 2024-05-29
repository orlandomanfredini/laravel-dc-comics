@extends('layout')

@section('content')
<div class="container text-center">
<h1>vista SHOW</h1>
<h2>STAI VISUALISSANZO {{$comic->title}}</h2>
<p>{{$comic->description}}</p>
<strong>Prezzo:{{$comic->price}}</strong>
<div>Tipo:{{$comic->type}}</div>
<div>Saga:{{$comic->series}}</div>
<div>Uscita:{{$comic->sales_date}}</div>
<a href="{{route('comics.index')}}">HOME</a>
</div>
@endsection