@extends('layouts.main')

@section('main-content')

<section id="add-comic">
  <div class="container">

    <h2>Aggiungi un nuovo Fumetto</h2>
    @include('includes.comics.form')
</div>
</section>

@endsection