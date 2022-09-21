@extends('layouts.main')

@section('main-content')

<section id="add-comic">
  <div class="container">

    <h2>Aggiungi un nuovo Fumetto</h2>
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col">
          {{-- Title Input --}}
          <div class="input-box">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" placeholder="Inserisci il Titolo">
          </div>
          {{-- Thumbnail Input --}}
          <div class="input-box">
            <label for="thumb">Copertina / Cover</label>
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci la Copertina">
          </div>
          {{-- Description Input --}}
          <div class="input-box">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" placeholder="Inserisci la Descrizione" rows="5"></textarea>
          </div>
        </div>
        <div class="col">
          {{-- Series Input --}}
          <div class="input-box">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" placeholder="Inserisci la Serie">
          </div>
          {{-- Type Input --}}
          <div class="input-box">
            <label for="type">Tipologia Fumetto</label>
            <input type="text" id="type" name="type" placeholder="Inserisci il tipo di Fumetto">
          </div>
          {{-- Sale Date Input --}}
          <div class="input-box">
            <label for="sale-date">Data di Vendita</label>
            <input type="date" id="sale-date" name="sale_date" placeholder="Inserisci la data di vendita">
          </div>
          {{-- Price Input --}}
          <div class="input-box">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" id="price" name="price" placeholder="Inserisci il Prezzo">
          </div>
        </div>
      </div>
      <hr/>
      {{-- CTA Form Button --}}
      <div class="form-cta">
        <a class="btn btn-back" href="{{ route('comics.index') }}">Torna indietro</a>
        <div>
          <button class="btn btn-reset" type="reset">Resetta</button>
          <button class="btn btn-add" type="submit">Salva</button>
        </div>
      </div>
    </div>
  </form>
</div>
</section>

@endsection