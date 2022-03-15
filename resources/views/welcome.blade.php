<?php
    $is_signed = isset($_COOKIE[sha1('is_user_signed_in_kef_investment')]);
?>
@extends('layout.app')
@section('content')

    <!-- banner-section start -->
  <section class="banner-section banner--four">
    <div class="banner-shape bg_img" data-background="assets/images/elements/home4-banner-shape.png"></div>
    <div class="banner-elements-image anim-bounce"><img src="assets/images/elements/home4-banner-el.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="banner-content-area">
            <div class="banner-content">
              <span class="banner-sub-title">GET ULTIMATE PROFIT</span>
              <h6 class="banner-title text-white w3-xxxlarge" >BUILD YOUR FUTURE WITH INVESTMENTS</h6>
              <p class="text-white">We are worldwide investment company who are committed to the principle of revenue maximization & reduction of the financial risks at investing.</p>
            </div>
            <div class="banner-btn-area">
              @if ($is_signed)
                    <button type="button" class="btn btn-info btn-round" onclick="window.location.href = '{{url('/dashboard')}}'">get started now!</button>
                @else
                    <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#signInModal">get started now!</button>
                @endif
              {{-- <a href="#0" class="video-btn video-btn--info">
                <span class="icon"><i class="icofont-ui-play"></i></span>
              </a> --}}
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end -->

  <!-- counter-section start -->
  <div class="counter-sections pt-lg-0 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="counter-area style--two d-flex justify-content-between">
            <div class="counter-item">
              <div class="counter-icon">
                <img src="assets/images/icons/counter/1.svg" alt="icon">
              </div>
              <div class="counter-content">
                <span>$</span>
                <span class="counter">961</span>
                <span>k</span>
                <span class="caption">Invested in Pitches</span>
              </div>
            </div><!-- counter-item end -->
            <div class="counter-item">
              <div class="counter-icon">
                <img src="assets/images/icons/counter/2.svg" alt="icon">
              </div>
              <div class="counter-content">
                <span>$</span>
                <span class="counter">634</span>
                <span>k</span>
                <span class="caption">Registered Members</span>
              </div>
            </div><!-- counter-item end -->
            <div class="counter-item">
              <div class="counter-icon">
                <img src="assets/images/icons/counter/3.svg" alt="icon">
              </div>
              <div class="counter-content">
                <span>$</span>
                <span class="counter">14</span>
                <span>k</span>
                <span class="caption">Average Investment</span>
              </div>
            </div><!-- counter-item end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- counter-section end -->

  <!-- features-section start -->
  <section class="features-section style--two pt-120 pb-120">
    <div class="map-ele"><img src="assets/images/elements/map-ele.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-subtitle">Our Amazing Features</span>
            {{-- <h2 class="section-title">Investing For Everyone</h2>
            <p>We are worldwide investment company who are committed to the principle of revenue maximization and reduction of the financial risks at investing.</p> --}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-sm-6">
          <div class="feature-item item--style2 text-center">
            <div class="icon">
              <img src="assets/images/icons/features/1.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">Simple</h3>
              {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
            </div>
          </div>
        </div><!-- feature-item end -->
        <div class="col-lg-2 col-sm-6">
          <div class="feature-item item--style2 text-center">
            <div class="icon">
              <img src="assets/images/icons/features/2.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">transparent</h3>
              {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
            </div>
          </div>
        </div><!-- feature-item end -->
        <div class="col-lg-2 offset-lg-1 col-sm-6">
          <div class="feature-item item--style2 text-center">
            <div class="icon">
              <img src="assets/images/icons/features/3.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">security</h3>
              {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
            </div>
          </div>
        </div><!-- feature-item end -->
        <div class="col-lg-2 offset-lg-1 col-sm-6">
          <div class="feature-item item--style2 text-center">
            <div class="icon">
              <img src="assets/images/icons/features/5.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">compliant</h3>
              {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
            </div>
          </div>
        </div><!-- feature-item end -->
        <div class="col-lg-2 col-sm-6">
          <div class="feature-item item--style2 text-center">
            <div class="icon">
              <img src="assets/images/icons/features/4.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">efficient</h3>
              {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
            </div>
          </div>
        </div><!-- feature-item end -->
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- choose-us-section start -->
  <section class="choose-us-section pt-120 pb-120">
    <div class="round-shape-el"><img src="assets/images/elements/choose-us-circle-shape.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-subtitle">Boost your Money</span>
            <h2 class="section-title">Why Choose Us</h2>
            <p>Our service gives you better result and savings, as per your requirement and you can manage your investments from anywhere either from home or work place,any time.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-4">
          <div class="choose-us-thumb d-xl-block d-none anim-bounce">
            <img src="assets/images/elements/choose-us-img.png" alt="image">
          </div>
        </div>
        <div class="col-xl-8">
          <div class="choose-us-slider__three owl-carousel">
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/1.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/2.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Instant Withdraw</h3>
                <p>We’re extremely excited to launch instant withdrawals.you can deposit and withdraw funds in just a few clicks.</p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/3.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Dedicated Server</h3>
                <p>Dedicated server hosting with 100% guaranteed network uptime.There's no sharing of CPU time, RAM or bandwidth</p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/4.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">DDoS Protection</h3>
                <p>To protect your resources from modern DDoS attacks is through a multi-layer deployment of purpose-built DDoS mitigation </p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/5.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">24/7 Support</h3>
                <p>Our Technical Support team is available for any questions.Our  multilingual 24/7 support allows to keep in touch.</p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item text-center">
              <div class="choose-thumb">
                <img src="assets/images/choose-us/1.png" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
                {{-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> --}}
              </div>
            </div><!-- choose-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-us-section end -->

  <!-- invest-section start -->
  <section class="invest-section pt-120 pb-120">
    <div class="round-shape d-xl-block d-none"><img src="assets/images/elements/invest-shape.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header text-center text-white">
            <span class="section-subtitle">The smarter way to invest!</span>
            <h2 class="section-title">Start investing! It’s never too late</h2>
            <p>Make sound investment decisions with the help of our research & analytical assets.The minimum  deposit is $1000 with no maximum. We pay 7 days per week.  You may make additional deposits at any time. All our payments are instant payments.</p>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-12">
          <div class="invest-table-area style--two wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <table>
              <thead>
                <tr>
                  <th>share</th>
                  <th>price</th>
                  <th>growth</th>
                  <th>daily dividend</th>
                  <th>investors</th>
                  <th>time remainig</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="person-details">
                      <div class="thumb"><img src="assets/images/invest/1.png" alt="image"></div>
                      <div class="content">
                        <span class="name">Forex Stable Income</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="price">$10.50</span>
                  </td>
                  <td>
                    <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                  </td>
                  <td>
                    <span class="daily-dividend">$0.9</span>
                  </td>
                  <td>
                    <span class="investors-amount">718</span>
                  </td>
                  <td>
                    <span class="remaining-time">21 DAYS</span>
                    <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="person-details">
                      <div class="thumb"><img src="assets/images/invest/2.png" alt="image"></div>
                      <div class="content">
                        <span class="name">Pavimentadora Real Ltd</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="price">$10.50</span>
                  </td>
                  <td>
                    <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                  </td>
                  <td>
                    <span class="daily-dividend">$0.9</span>
                  </td>
                  <td>
                    <span class="investors-amount">718</span>
                  </td>
                  <td>
                    <span class="remaining-time">21 DAYS</span>
                    <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="person-details">
                      <div class="thumb"><img src="assets/images/invest/3.png" alt="image"></div>
                      <div class="content">
                        <span class="name">Ethereum Farm</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="price">$10.50</span>
                  </td>
                  <td>
                    <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                  </td>
                  <td>
                    <span class="daily-dividend">$0.9</span>
                  </td>
                  <td>
                    <span class="investors-amount">718</span>
                  </td>
                  <td>
                    <span class="remaining-time">21 DAYS</span>
                    <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="person-details">
                      <div class="thumb"><img src="assets/images/invest/4.png" alt="image"></div>
                      <div class="content">
                        <span class="name">Legacinet Works</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="price">$10.50</span>
                  </td>
                  <td>
                    <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                  </td>
                  <td>
                    <span class="daily-dividend">$0.9</span>
                  </td>
                  <td>
                    <span class="investors-amount">718</span>
                  </td>
                  <td>
                    <span class="remaining-time">21 DAYS</span>
                    <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="person-details">
                      <div class="thumb"><img src="assets/images/invest/2.png" alt="image"></div>
                      <div class="content">
                        <span class="name">Healthcare Tech</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="price">$10.50</span>
                  </td>
                  <td>
                    <span class="growth">122% <i class="fa fa-arrow-up"></i></span>
                  </td>
                  <td>
                    <span class="daily-dividend">$0.9</span>
                  </td>
                  <td>
                    <span class="investors-amount">718</span>
                  </td>
                  <td>
                    <span class="remaining-time">21 DAYS</span>
                    <a href="#0" class="btn btn-primary btn-round pull-right">invest now</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btn-area mt-50 text-center">
            <a href="#0" class="btn btn-primary btn-hover text-small">browse more</a>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- invest-section end -->

  <!-- offer-section start -->
  <section class="offer-section pt-120 pb-120">
    <div class="ball-object"><img src="assets/images/elements/offer-ball-object.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-8">
              <div class="offer-item">
                <div class="icon">
                  <img src="assets/images/icons/offer/1.svg" alt="icon">
                </div>
                <div class="content">
                  <h3 class="title">smart deposit</h3>
                  <p>Best way t o put your idle money to work.</p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- offer-item end -->
            </div>
            <div class="col-lg-8 offset-lg-2">
              <div class="offer-item">
                <div class="icon">
                  <img src="assets/images/icons/offer/2.svg" alt="icon">
                </div>
                <div class="content">
                  <h3 class="title">One - Tap Invest</h3>
                  <p>Invest without net baning/debit card.</p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- offer-item end -->
            </div>
            <div class="col-lg-8 offset-lg-4">
              <div class="offer-item">
                <div class="icon">
                  <img src="assets/images/icons/offer/3.svg" alt="icon">
                </div>
                <div class="content">
                  <h3 class="title">invest & saving</h3>
                  <p>Grow your saving by investing as little as $5</p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- offer-item end -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5">
          <div class="offer-wrapper-content">
            <span class="subtitle">Our mission is to help our User</span>
            <h2 class="title">To Maximize Money</h2>
            <p>Whether you're new to investing or a seasoned pro, Pro-Returns does what is right for you and your money. On average, our investing principles can increase returns by 15% when compared to the typical investor.</p>
            <p>We believe that the future of finance looks very different from how it looks today and we offer qualifying investors the opportunity to invest in the companies and products that are building the future of finance.</p>
            {{-- <a href="#0" class="btn btn-primary btn-hover">what we offer</a> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- offer-section end -->

  <!-- calculate-profit-section start -->
  <section class="calculate-profit-section pt-120 pb-120">
    <div class="bg_img overlay" data-background="assets/images/invest-plan2.jpg"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center text-white">
            <span class="section-subtitle">the amazing profits</span>
            <h2 class="section-title">You Can Earn</h2>
            <p>Earnings on investing could range as high as 12% <button class="btn btn-warning" style="padding: 5px 9px; color: white">Find Out Now</button> Pending on investor’s choice of
asset and term of investment. All our issuers have obligation to pay dividends for first year regardless
their financial situation. Implicitly, your investments are 100% secured</p>
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-lg-12">
          <div class="calculate-area wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <ul class="nav nav-tabs justify-content-around" id="calculatorTab" role="tablist">
              <li>
                <div class="icon"><img src="assets/images/icons/invest-calculate/1.svg" alt="icon-image"></div>
                <h5 class="package-name">Basic Plan</h5>
                <span class="percentage">2%</span>
                <a class="active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">calculate</a>
              </li>
              <li>
                  <div class="icon"><img src="assets/images/icons/invest-calculate/2.svg" alt="icon-image"></div>
                  <h5 class="package-name">satandard Plan</h5>
                  <span class="percentage">3%</span>
                <a id="satandard-tab" data-toggle="tab" href="#satandard" role="tab" aria-controls="satandard" aria-selected="false">calculate</a>
              </li>
              <li>
                  <div class="icon"><img src="assets/images/icons/invest-calculate/3.svg" alt="icon-image"></div>
                  <h5 class="package-name">premium Plan</h5>
                  <span class="percentage">2%</span>
                <a id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="false">calculate</a>
              </li>
            </ul>
            <div class="tab-content" id="calculatorTabContent">
              <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                <div class="invest-amount-area text-center">
                  <h4 class="title">Invest Amount</h4>
                  <div class="main-amount">
                    <input type="text" class="calculator-invest" id="basic-amount" readonly>
                  </div>
                  <div id="slider-range-min-one" class="invest-range-slider"></div>
                </div><!-- invest-amount-area end -->
                <div class="plan-amount-calculate">
                  <div class="item">
                    <span class="caption">Basic plan</span>
                    <span class="details">Minimum Deposit $5</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">Daily Profit</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">per month</span>
                  </div>
                  <div class="item">
                    <a href="#" class="invest-btn btn-round">invest now</a>
                  </div>
                </div><!-- plan-amount-calculate end -->
              </div>
              <div class="tab-pane fade" id="satandard" role="tabpanel" aria-labelledby="satandard-tab">
                <div class="invest-amount-area text-center">
                  <h4 class="title">Invest Amount</h4>
                  <div class="main-amount">
                    <input type="text" class="calculator-invest" id="satandard-amount" readonly>
                  </div>
                  <div id="slider-range-min-two" class="invest-range-slider"></div>
                </div><!-- invest-amount-area end -->
                <div class="plan-amount-calculate">
                  <div class="item">
                    <span class="caption">satandard plan</span>
                    <span class="details">Minimum Deposit $15</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">Daily Profit</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">per month</span>
                  </div>
                  <div class="item">
                    <a href="#" class="invest-btn btn-round">invest now</a>
                  </div>
                </div><!-- plan-amount-calculate end -->
              </div>
              <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                <div class="invest-amount-area text-center">
                  <h4 class="title">Invest Amount</h4>
                  <div class="main-amount">
                    <input type="text" class="calculator-invest" id="premium-amount" readonly>
                  </div>
                  <div id="slider-range-min-three" class="invest-range-slider"></div>
                </div><!-- invest-amount-area end -->
                <div class="plan-amount-calculate">
                  <div class="item">
                    <span class="caption">premium plan</span>
                    <span class="details">Minimum Deposit $25</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">Daily Profit</span>
                  </div>
                  <div class="item">
                    <span class="profit-amount">$12.67</span>
                    <span class="profit-details">per month</span>
                  </div>
                  <div class="item">
                    <a href="#" class="invest-btn btn-round">invest now</a>
                  </div>
                </div><!-- plan-amount-calculate end -->
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- calculate-profit-section end -->

  <!-- deposit-withdraw-section start -->
  <section class="deposit-withdraw-section pt-120 pb-120">
    <div class="circle-object"><img src="assets/images/elements/deposit-circle-shape.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-subtitle">Convenient money</span>
            <h2 class="section-title">Deposit & Withdrawal</h2>
            <p>Depositing or withdrawing money is simple. We adopt cryptocurrency as the sole payment method.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="dep-wth-option-area wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <span class="circle three"></span>
            <span class="circle four"></span>
            {{-- <a href="#0" class="card-item">
              <span class="icon"><img src="assets/images/icons/payment-option/card.svg" alt="image"></span>
              <span class="caption">Credit Card</span>
            </a><!-- card-item end -->
            <a href="#0" class="card-item">
              <span class="icon"><img src="assets/images/icons/payment-option/paypal.svg" alt="image"></span>
              <span class="caption">Credit Card</span>
            </a><!-- card-item end --> --}}
            <a href="#0" class="card-item">
              <span class="icon"><img style="width: 130px; height: 130px;" src="assets/images/icons/payment-option/bitcoin.svg" alt="image"></span>
              {{-- <span class="caption">Credit Card</span> --}}
            </a><!-- card-item end -->
            {{-- <a href="#0" class="card-item">
              <span class="icon"><img src="assets/images/icons/payment-option/litecoin.svg" alt="image"></span>
              <span class="caption">Credit Card</span>
            </a><!-- card-item end -->
            <a href="#0" class="card-item">
              <span class="icon"><img src="assets/images/icons/payment-option/ethereum.svg" alt="image"></span>
              <span class="caption">Credit Card</span>
            </a><!-- card-item end -->
            <a href="#0" class="card-item">
              <span class="icon"><img src="assets/images/icons/payment-option/ripple.svg" alt="image"></span>
              <span class="caption">Credit Card</span> --}}
            </a><!-- card-item end -->
            {{-- <a href="#0" class="text-btn">view all option</a> --}}
          </div>
        </div>
        <div class="col-lg-6">
          <div class="feature-item">
            <div class="icon">
              <div class="icon-inner">
                <img src="assets/images/icons/payment-option/ft1.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <h3 class="title">No Limits</h3>
              <p>Unlimited maximum withdrawal amount</p>
            </div>
          </div><!-- feature-item end -->
          <div class="feature-item">
            <div class="icon">
              <div class="icon-inner">
                <img src="assets/images/icons/payment-option/ft2.svg" alt="icon">
              </div>
            </div>
            <div class="content">
              <h3 class="title">Withdrawal in 24 /7</h3>
              <p>Deposit – instantaneous</p>
            </div>
          </div><!-- feature-item end -->
        </div>
      </div>
    </div>
  </section>
  <!-- deposit-withdraw-section end -->

  <!-- community-section start -->
  <section class="community-section pt-120 pb-120">
    <div class="object anim-bounce"><img src="assets/images/elements/community-bg-object.png" alt="image"></div>
    <div class="shape"><img src="assets/images/elements/community-bg-shpe.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="section-header text-center">
            <span class="section-subtitle">We support</span>
            <h2 class="section-title">Cryptocurrency Community</h2>
            <p>Access a world of dynamic investment opportunities, buy into businesses you believe in and share in their  success.You may make additional deposits at any time. All our payments are instant payments.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 offset-lg-5">
          <div class="row mb-none-30">
            <div class="col-lg-8">
              <div class="community-item community-item--style2 mb-30">
                <div class="icon">
                  <img src="assets/images/icons/community/1.svg" alt="image">
                </div>
                <div class="content">
                  <h3 class="title">Simplicity</h3>
                  <p>We’re eliminating complex user experiences.</p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- community-item end -->
            </div>
            <div class="col-lg-8 offset-lg-2">
              <div class="community-item community-item--style2 mb-30">
                <div class="icon">
                  <img src="assets/images/icons/community/2.svg" alt="image">
                </div>
                <div class="content">
                  <h3 class="title">security</h3>
                  <p>Enhanced security features like multi-factor </p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- community-item end -->
            </div>
            <div class="col-lg-8 offset-lg-4">
              <div class="community-item community-item--style2 mb-30">
                <div class="icon">
                  <img src="assets/images/icons/community/3.svg" alt="image">
                </div>
                <div class="content">
                  <h3 class="title">support</h3>
                  <p>Get all the support you need for your Investment</p>
                  {{-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> --}}
                </div>
              </div><!-- community-item end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- community-section end -->

  <!-- latest-transaction-section start -->
  {{-- <section class="latest-transaction-section pt-120 pb-120">
    <div class="bg_img" data-background="assets/images/transaction-bg.jpg"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center text-white">
            <span class="section-subtitle">Latest Transaction</span>
            <h2 class="section-title">Withdrawals</h2>
            <p>Our goal is to simplify investing so that anyone can be an investor.Withthis in mind, we  hand-pick the investments we offer on our platform.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav nav-tabs justify-content-center tab-nav" id="transactionTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="true">Daily</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
            </li>
          </ul>
          <div class="tab-content" id="transactionTabContent">
            <div class="tab-pane fade show active" id="daily" role="tabpanel" aria-labelledby="daily-tab">
              <div class="withdraw-table-area">
                <table>
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>price</th>
                      <th>Daily Dividend</th>
                      <th>AMOUNTs</th>
                      <th>Deposit by</th>
                      <th>Currency</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-1.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Jim Adams</span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-2.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Willie Barton </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/fire.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-3.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Kim Mccoy </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-4.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Sheryl Tran </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/fan.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-5.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Jim Adams</span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/dollar.png" alt="icon">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
              <div class="withdraw-table-area">
                <table>
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>price</th>
                      <th>Daily Dividend</th>
                      <th>AMOUNTs</th>
                      <th>Deposit by</th>
                      <th>Currency</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-1.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Jim Adams</span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-2.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Willie Barton </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/fire.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-3.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Kim Mccoy </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-4.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Sheryl Tran </span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/fan.png" alt="icon">
                      </td>
                    </tr>
                    <tr>
                      <td data-head="name">
                        <div class="person-details">
                          <div class="thumb"><img src="assets/images/withdraw/t-5.png" alt="image"></div>
                          <div class="content">
                            <span class="name">Jim Adams</span>
                          </div>
                        </div>
                      </td>
                      <td data-head="price">
                        <span class="price">$10.50</span>
                      </td>
                      <td data-head="daily dividend">
                        <span class="daily-dividend">$10.50</span>
                      </td>
                      <td data-head="amounts">
                        <span class="amount">$0.9</span>
                      </td>
                      <td data-head="Deposit by">
                        <span class="days">21 days</span>
                      </td>
                      <td data-head="Currency">
                        <img src="assets/images/icons/withdraw/dollar.png" alt="icon">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section> --}}
  <!-- latest-transaction-section end -->

  <!-- affiliate-features-section start -->
  {{-- <section class="affiliate-features-section style--tow pt-120 pb-120">
    <div class="shape-el"><img src="assets/images/elements/affiliate-round-shape.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row mb-none-30">
            <div class="col-md-6">
              <div class="affiliate-features-item item--style2 text-center mb-30">
                <div class="icon"><img src="assets/images/icons/affiliate-features/1.svg" alt="image"></div>
                <span class="subtitle">Enjoy unlimited</span>
                <h3 class="title">Commissions</h3>
              </div>
            </div><!-- affiliate-features-item end -->
            <div class="col-md-6">
              <div class="affiliate-features-item item--style2 text-center mb-30">
                <div class="icon"><img src="assets/images/icons/affiliate-features/2.svg" alt="image"></div>
                <span class="subtitle">Extra Bonus and</span>
                <h3 class="title">Promotions</h3>
              </div>
            </div><!-- affiliate-features-item end -->
            <div class="col-md-6">
              <div class="affiliate-features-item item--style2 text-center mb-30">
                <div class="icon"><img src="assets/images/icons/affiliate-features/3.svg" alt="image"></div>
                <span class="subtitle">Get top notch</span>
                <h3 class="title">Support</h3>
              </div>
            </div><!-- affiliate-features-item end -->
            <div class="col-md-6">
              <div class="affiliate-features-item item--style2 text-center mb-30">
                <div class="icon"><img src="assets/images/icons/affiliate-features/4.svg" alt="image"></div>
                <span class="subtitle">Joining is</span>
                <h3 class="title">Free & Easy</h3>
              </div>
            </div><!-- affiliate-features-item end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="affiliate-features-content mt-lg-0 mt-5">
            <div class="section-header">
              <span class="section-subtitle">Earn The Big Money</span>
              <h2 class="section-title">Affiliate Program</h2>
              <p>Our affiliate program can increase your income by receiving percentage from the purchases made by your referrals into. </p>
            </div>
            <p>Invite other users (for example, your friends, co-workers, etc.) to join the project. After registration they will be your referrals; and if they purchase any item on our web site you receive 24% reward.</p>

          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- affiliate-features-section end -->

  <!-- testimonial-section start -->
  <section class="testimonial-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="section-header text-center">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title">Over 7,000 Happy Customers</h2>
            <p>We have many happy investors invest with us .Some impresions from our Customers!  PLease read some of the lovely things our Customers say about us.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonial-wrapper d-lg-block d-none style--two">
            <div class="map-img"><img src="assets/images/elements/testimonial-map.png" alt="image"></div>
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/1.png" alt="image">
              </div>
              <div class="details text-center">
                <p>Thumbs up guys, I have always had my reservations about online trading, this has
changed everything</p>
                <h4 class="name">Catherine</h4>
                <span class="client-details">United State</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/2.png" alt="image">
              </div>
              <div class="details text-center">
                <p>I didn’t want to invest in stocks because I’m not a financial expert but Investing
with Pro-Returns, changes the narrative as it suites the needs of all. They are skilled and
knowledgeable, and in turn would recommend them to anyone looking to maximize their
money regardless of their investment knowledge</p>
                <h4 class="name">Marcel</h4>
                <span class="client-details">Bolivia</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/3.png" alt="image">
              </div>
              <div class="details text-center">
                <p>Great service guys! I have been worried about investing. But when I came here. I
                    don't have to worry anymore.</p>
                <h4 class="name">Oliver</h4>
                <span class="client-details">Australia</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/4.png" alt="image">
              </div>
              <div class="details text-center">
                <p>Like everyone, I want protected from currency fluctuations and Pro-Returns helps me
                    with that</p>
                <h4 class="name">Amira</h4>
                <span class="client-details">Saudi Arabia</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/5.png" alt="image">
              </div>
              <div class="details text-center">
                <p>The Marijuana and crude oil asset classes are my preferred things about Pro-Returns. I
                    love seeing how my Pro-returns perform on a daily basis. It demonstrates safety and also puts me at
                    a lower risk of losing money</p>
                <h4 class="name">Pavel</h4>
                <span class="client-details">Russia</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
            <div class="testimonial-single">
              <div class="thumb">
                <img src="assets/images/testimonial/6.png" alt="image">
              </div>
              <div class="details text-center">
                <p>A very good company for those want to invest from Philippines</p>
Divina</h4>
                <span class="client-details">Phillipine</span>
                <span class="arrow-wrap"><span class="arrow"></span></span>
              </div>
            </div><!-- testimonial-single end -->
          </div>
          <div class="testmonial-slider-wrapper d-lg-none mb-4">
            <div class="testimonial-slider owl-carousel">
              <div class="testimonial-single-two">
                <div class="thumb"><img src="assets/images/testimonial/1.png" alt="image"></div>
                <h4 class="name">Catherine</h4>
                <span class="designation">Thumbs up guys, I have always had my reservations about online trading, this has
                    changed everything</p>
              </div><!-- testimonial-single-two end -->
              <div class="testimonial-single-two">
                <div class="thumb"><img src="assets/images/testimonial/2.png" alt="image"></div>
                <h4 class="name">Marcel</h4>
                <span class="designation">I didn’t want to invest in stocks because I’m not a financial expert but Investing
                    with Pro-Returns, changes the narrative as it suites the needs of all. They are skilled and
                    knowledgeable, and in turn would recommend them to anyone looking to maximize their
                    money regardless of their investment knowledge</p>
              </div><!-- testimonial-single-two end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-section end -->

  <!-- investors-section start -->
  {{-- <section class="investors-section pt-120 pb-120">
    <div class="bg-shape bg_img" data-background="assets/images/investor-bg.png"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8">
          <div class="section-header text-white wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <span class="section-subtitle">Take a look at our</span>
            <h2 class="section-title">Top 10 Investors</h2>
            <p>A look at the top ten investors of all time and the strategies they used to make their money.</p>
          </div>
        </div>
      </div>
      <div class="investor-slider owl-carousel">
        <div class="investor-item text-center">
          <div class="thumb">
            <img src="assets/images/investors/1.png" alt="image">
            <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="content">
            <h4 class="name"><a href="#0">Sean Obrien</a></h4>
            <span class="amount">$50,000.00</span>
            <p>Pain by <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon"></p>
          </div>
        </div>
        <div class="investor-item text-center">
          <div class="thumb">
            <img src="assets/images/investors/2.png" alt="image">
            <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="content">
            <h4 class="name"><a href="#0">Naomi White</a></h4>
            <span class="amount">$43,500.00</span>
            <p>Pain by <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon"></p>
          </div>
        </div>
        <div class="investor-item text-center">
          <div class="thumb">
            <img src="assets/images/investors/3.png" alt="image">
            <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="content">
            <h4 class="name"><a href="#0">Tom Barker</a></h4>
            <span class="amount">$42,000.00</span>
            <p>Pain by <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon"></p>
          </div>
        </div>
        <div class="investor-item text-center">
          <div class="thumb">
            <img src="assets/images/investors/1.png" alt="image">
            <a href="#0" class="icon"><i class="fa fa-linkedin"></i></a>
          </div>
          <div class="content">
            <h4 class="name"><a href="#0">Sean Obrien</a></h4>
            <span class="amount">$50,000.00</span>
            <p>Pain by <img src="assets/images/icons/withdraw/bitcoin.png" alt="icon"></p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- investors-section end -->
  <!-- contest-winner-section start  -->
  {{-- <section class="contest-winner-section pt-120 pb-120">
    <div class="shape"><img src="assets/images/elements/contest-shape.png" alt="image"></div>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-6 col-lg-6">
          <div class="contest-winner-content">
            <div class="section-header text-lg-left text-center">
              <span class="section-subtitle">Take a look at our latest</span>
              <h2 class="section-title">Contest Winners</h2>
              <p>The contest is based on sales from your referrals.The person with the most total  referral's revenue will get the Grand Prize. The more revenue your referrals produce the bigger chance for you to be on top.</p>

            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="contest-winner-slider owl-carousel">

          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- contest-winner-section end  -->

@endsection
