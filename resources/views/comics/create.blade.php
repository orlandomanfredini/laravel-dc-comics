@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">view CREATE</h1>
    <h2 class="text-center mt-3 text-warning">ADD COMIC</h2>
    <form action="{{route('comics.create')}}" method="POST">

    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Nome</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci saga">
        </div>

        <button type="button" class="btn btn-primary">
            <a class="text-white" href="">INVIA</a>
        </button>
    </form>

    <a class="d-block text-center mb-4" href="{{route('comics.index')}}">HOME</a>
</div>

@endsection