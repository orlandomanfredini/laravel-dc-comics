@extends('layout')

@section('title', 'Modifica Comic')

@section('content')
<main>
  <section>
    <div class="container">
      <p>comics.EDIT</p>
      <h2 class="fs-2">Modifica il COMIC {{$comic->title}}</h2>
    </div>
    <div class="container">
      <form class="my-5" action="{{route('comics.update', $comic)}}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="tetx" value="{{$comic->title}}" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <input type="text" value="{{$comic->description}}" name="description" class="form-control" id="description" placeholder="Inserisci descrizione">
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Thumb</label>
          <input type="tetx" value="{{$comic->thumb}}" name="thumb" class="form-control" id="thumb" placeholder="img">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="tetx" value="{{$comic->price}}" name="price" class="form-control" id="price" placeholder="Prezzo">
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Serie</label>
          <input type="tetx" value="{{$comic->series}}" name="series" class="form-control" id="series" placeholder="Inserisci serie">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Genere</label>
          <input type="tetx" value="{{$comic->type}}" class="form-control" name="type" id="type" rows="3" placeholder="Genere/Tipo"></input>
        </div>

        <div class="mb-3">
          <label for="sales_date" class="form-label">Data Uscita</label>
          <input type="tetx" value="{{$comic->sales_date}}" class="form-control" name="sales_date" id="sales_date" rows="3" placeholder="Inserisci data Uscita"></input>
        </div>

        <button class="btn btn-primary">Salva</button>
      </form>
    </div>
  </section>

  <a class="d-block text-center mb-3" href="{{route('comics.index')}}">HOME</a>
</main>

@endsection

