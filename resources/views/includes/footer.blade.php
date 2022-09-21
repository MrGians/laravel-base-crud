<?php 
$footer_links = config('data.footer-links');
?>

<footer>
    <!-- Footer Top -->
    <section id="footer-top">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- Footer Top Links -->
            <div class="row links">
              <div class="col">
                <!-- DC Comics List -->
                <div id="dc-comics">
                  <h4>DC Comics</h4>
                  <ul>
                    @foreach ($footer_links['footer_dc_comics_links'] as $link)
                    <li>
                      <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <!-- Shop List -->
                <div id="shop">
                  <h4>Shop</h4>
                  <ul>
                    @foreach ($footer_links['footer_shop_links'] as $link)
                    <li>
                      <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col">
                <!-- DC -->
                <div id="dc">
                  <h4>DC</h4>
                  <ul>
                    @foreach ($footer_links['footer_dc_links'] as $link)
                    <li>
                      <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col">
                <!-- Sites -->
                <div id="sites">
                  <h4>Sites</h4>
                  <ul>
                    @foreach ($footer_links['footer_sites_links'] as $link)
                    <li>
                      <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <!-- Copyright -->
                <div class="copy">
                  <p>All site content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserver. <br/> <a href="#">Cookies Settings</a></p>
                </div>
          </div>
          <div class="col logo">
            <!-- Footer Top Bg-logo -->
            <img src="{{ asset('img/dc-logo-bg.png') }}" alt="DC Background Logo" />
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Bottom -->
    <section id="footer-bottom">
      <div class="container">
        <div class="row">
          <!-- SignUp Now Btn -->
          <div class="col">
            <a class="btn" href="#">Sign-up Now!</a>
          </div>
          <!-- Social Follow Links -->
          <div class="col social-links">
            <h4>Follow Us</h4>
            @foreach ($footer_links['footer_social_links'] as $social)
            <a href="#"><img src="{{ asset($social['src']) }}" alt="{{ $social['text'] }}"/></a>
            @endforeach
          </div>
        </div>
      </div>
    </section>
</footer>