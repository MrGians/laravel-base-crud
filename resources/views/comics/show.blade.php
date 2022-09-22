@extends('layouts.main')

@section('main-content')

<!-- Single Serie -->
<section id="single-serie">
  <!-- Serie Info -->
  <div class="serie-info">
      <div class="container w-50">
        <div class="row">
          <!-- Comic Book Information -->
          <div class="col">
            <!-- Comic Cover -->
            <figure class="comic-cover">
              <span class="top-label">{{ $comic->type }}</span>
              <img src="{{ $comic->thumb ? $comic->thumb : asset('img/thumb-placeholder.png') }}" alt="{{ $comic->series }}">
              <span class="bottom-label">View Gallery</span>
            </figure>
            <!-- Title -->
            <h2>{{ $comic->title }}</h2>
            <!-- Buy Information -->
            <div class="buy-info">
              <div>
                <!-- Price -->
                <span class="price">U.S. Price: <strong>£{{ $comic->price }}</strong></span>
                <!-- Availability -->
                <span class="available">Available</span>
              </div>
              <!-- Check Availability -->
              <div class="check">
                <a href="#">Check Availability</a>
              </div>
            </div>
            <!-- Description -->
            <p>{{ $comic->description }}</p>
          </div>
          <!-- Advertisement // TODO fix -->
          <div class="col">
            <h5>Advertisement</h5>
            <figure class="adv">
              <img src="{{asset('img/advertisement.jpg')}}" alt="{{ $comic->series }}">
            </figure>
          </div>
        </div>
    </div>
  </div>
  <hr />
  <!-- Additional Info -->
  <div class="additional-info">
    <div class="container">
      <div class="row">
        <!-- Specs info -->
        <div class="col">
          <div class="specs">
            <h4>Specs</h4>
            <hr/>
            <!-- Serie type -->
            <div class="type">
              <h6>Series:</h6>
              <span>{{ $comic->series }}</span>
            </div>
            <hr/>
            <!-- Serie price -->
            <div class="price">
              <h6>U.S. Price:</h6>
              <h6>£{{ $comic->price }}</h6>
            </div>
            <hr/>
            <!-- Serie sale date -->
            <div class="sale-date">
              <h6>On Sale Date:</h6>
              <h6>{{ date('M d Y', strtotime($comic->sale_date)) }}</h6>
            </div>
            <hr/>
          </div>
        </div>
        <!-- Go Back Button -->
        <div class="col">
          <a class="btn btn-back" href="{{ route('comics.index') }}">Torna indietro</a>
          <form method="{{ route('comics.destroy', $comic->id) }}" action="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-del">Cancella</button>
          </form>
          <a class="btn btn-edit" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Comic Banner Section -->
<section id="comic-banner">
    <div class="container">
      <div class="row">
        @foreach ($comic_banner_items as $item)
        <div class="col">
          <span>{{ $item['text'] }}</span>
          <figure>
            <img src="{{ asset($item['src']) }}" alt="{{ $item['text'] }}" class="{{ $item['class'] }}" />
          </figure>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection