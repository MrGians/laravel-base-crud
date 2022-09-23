{{-- Errors Message --}}
@if($errors->any())
<div class="errors">
  <ul>
    @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
    @endforeach
  </ul>
</div>

@endif
{{-- Form choice --}}
@if ($comic->exists)
  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
  @method('PUT')
@else
  <form action="{{ route('comics.store') }}" method="POST">  
@endif

  @csrf
      <div class="row">
        <div class="col">
          {{-- Title Input --}}
          <div class="input-box">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" placeholder="Inserisci il Titolo" value="{{ old('title', $comic->title) }}">
          </div>
          {{-- Thumbnail Input --}}
          <div class="input-box">
            <label for="thumb">Copertina / Cover</label>
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci la Copertina"  value="{{ old('thumb', $comic->thumb) }}">
          </div>
          {{-- Description Input --}}
          <div class="input-box">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" placeholder="Inserisci la Descrizione" rows="5">{{ old('description', $comic->description) }}</textarea>
          </div>
        </div>
        <div class="col">
          {{-- Series Input --}}
          <div class="input-box">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" placeholder="Inserisci la Serie" value="{{ old('series', $comic->series) }}">
          </div>
          {{-- Type Input --}}
          <div class="input-box">
            <label for="type">Tipologia Fumetto</label>
            <select name="type" id="type">
              <option value="comic book" @if($comic->type === 'comic book') selected @endif>Comic book</option>
              <option value="graphic novel" @if($comic->type === 'graphic novel') selected @endif>Graphic novel</option>
            </select>
          </div>
          {{-- Sale Date Input --}}
          <div class="input-box">
            <label for="sale-date">Data di Vendita</label>
            <input type="date" id="sale-date" name="sale_date" placeholder="Inserisci la data di vendita"  value="{{ old('sale_date', $comic->sale_date) }}">
          </div>
          {{-- Price Input --}}
          <div class="input-box">
            <label for="price">Prezzo</label>
            <input type="number" min="0.01" step="0.01" id="price" name="price" placeholder="Inserisci il Prezzo"  value="{{ old('price', $comic->price) }}">
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