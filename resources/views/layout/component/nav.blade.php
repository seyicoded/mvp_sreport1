<?php
    $is_signed = isset($_COOKIE[sha1('is_user_signed_in_kef_investment')]);
?>

<!--  header-section start  -->
<header class="header-section transparent--header header--fixed">
    <div class="header-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-md-6">
            <div class="header-top-left d-flex">
              <div class="support-part">
                  {{-- <a href="tel:+88016558888454"><i class="fa fa-headphones"></i>Support</a> --}}
              </div>
              <div class="email-part">
                  <a href="mailto:info@proreturns.net"><i class="fa fa-envelope"></i> <span class="__cf_email__" style="color: white">info@proreturns.net</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
              <div class="header-top-right d-flex align-items-center justify-content-end">
                  <div class="language-part">
                    <i class="fa fa-globe"></i>
                    <select>
                        <option>Eng</option>
                        {{-- <option>Ban</option>
                        <option>Rus</option>
                        <option>Arb</option> --}}
                    </select>
                  </div>
                  <div class="header-cart-count">
                    <a href="checkout.html">
                      {{-- <i class="fa fa-shopping-cart"></i> --}}
                      {{-- <span>{{ (!$is_signed) ? 'Guest': base64_decode($_COOKIE[(sha1('kef_user_name'))]) }}</span> --}}
                    </a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl">
          <a class="site-logo site-title" href="home-one.html"><img src="assets/images/logo2.png" alt="site-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li class="{{ ( url()->current() == url('')) ? 'active': '' }}"><a href="{{url('/')}}">Home</a>
              </li>
              <li class="{{ ( url()->current() == url('/about')) ? 'active': '' }}" ><a href="{{url('/about')}}">about</a></li>
              <li class="menu_has_children {{ (strpos( url()->current(), url('/asset-classes') )) ? 'active': '' }}"><a href="#0">Asset Classes</a>
                <ul class="sub-menu">
                    <li><a href="{{url('/asset-classes#forex')}}">Forex</a></li>
                    <li><a href="{{url('/asset-classes#crude-oil')}}">Crude Oil</a></li>
                    <li><a href="{{url('/asset-classes#crypto')}}">Cryptocurrency</a></li>
                    <li><a href="{{url('/asset-classes#marijuana')}}">Marijuana</a></li>
                    <li><a href="{{url('/asset-classes#stock-indice')}}">Stock indices</a></li>
                    <li><a href="{{url('/asset-classes#real-estate')}}">Real-estate</a></li>
                </ul>
              </li>
              {{-- <li><a href="{{url('/about')}}">about</a></li> --}}
              <li class="menu_has_children {{ (strpos( url()->current(), url('/support') )) ? 'active': '' }}"><a href="#0">Support</a>
                <ul class="sub-menu">
                    {{-- <li><a href="support/how-it-works">How It Works</a></li> --}}
                    <li><a href="{{url('/about#contact')}}">Contact Us</a></li>
                    <li><a href="{{url('/faq#faq')}}">Help Center</a></li>
                    <li><a href="{{url('support-security')}}">Security</a></li>
                </ul>
              </li>
              <li class="{{ ( url()->current() == url('faq')) ? 'active': '' }}"><a href="{{url('/faq')}}">Faqs</a></li>
              {{-- <li class="menu_has_children"><a href="#0">Pages</a>
                <ul class="sub-menu">
                    <li><a href="affiliate.html">Affiliate</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contest.html">Contest</a></li>
                    <li><a href="error-404.html">404 page</a></li>
                    <li><a href="help.html">Help Page</a></li>
                    <li><a href="how-work.html">How Work</a></li>
                    <li><a href="promotion.html">Promotion</a></li>
                    <li><a href="security.html">Security</a></li>
                </ul>
              </li> --}}
              {{-- <li class="menu_has_children"><a href="#0">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li> --}}
              {{-- <li><a href="{{url('/contact')}}">contact us</a></li> --}}
          </ul>
            <div class="header-join-part">
                @if ($is_signed)
                <button type="button" class="btn btn-primary" onclick="window.location.href = '{{url('/dashboard')}}'">DASHBOARD</button>
                @else
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signInModal">join us</button>
                @endif

            </div>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->
