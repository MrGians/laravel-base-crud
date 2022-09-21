<?php
$header_links = config('data.header-links');
?>

<header>
    <div class="container">
      <!-- Main Navbar -->
      <nav id="navbar">
        <!-- DC Logo -->
        <a href="{{ route('characters') }}">
          <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" />
        </a>

        <!-- Navbar Links -->
        <ul>
          @foreach ($header_links as $link)
          <li>
            <a href="{{ route($link['route_name']) }}" class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}">
              {{ $link['text'] }}
            </a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </header>