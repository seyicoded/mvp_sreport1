@extends('layout.app')
@section('content')
    {{-- start --}}
     <!-- inner-page-banner-section start -->
     <section class="inner-page-banner-section gradient-bg">
        <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/about.png" alt="image-illustration"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-page-content-area">
                        <h2 class="page-title">about us</h2>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item">about</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner-section end -->

   <!-- about-section start -->
   <section class="about-section start pt-120 pb-120">
     <div class="shape-el">
       <img src="assets/images/elements/about.png" alt="image">
     </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
              <div class="row align-items-center">
                <div class="col-lg-12 col-sm-6 mb-none-30">
                  <div class="counter-item style--two mb-30">
                    <div class="counter-icon">
                      <img src="assets/images/icons/about/1.svg" alt="icon">
                    </div>
                    <div class="counter-content pl-0">
                      <span class="counter">34.2</span>
                      <span>k</span>
                      <span class="caption">Registered Members </span>
                    </div>
                  </div><!-- counter-item end-->
                  <div class="counter-item style--two mb-30">
                    <div class="counter-icon">
                        <img src="assets/images/icons/about/2.svg" alt="icon">
                    </div>
                    <div class="counter-content pl-0">
                        <span class="counter">27.8</span>
                        <span>k</span>
                        <span class="caption">Satisfied customers</span>
                    </div>
                  </div><!-- counter-item end-->
                  {{-- <div class="counter-item style--two mb-30">
                    <div class="counter-icon">
                        <img src="assets/images/icons/about/3.svg" alt="icon">
                    </div>
                    <div class="counter-content pl-0">
                        <span class="counter">10</span>
                        <span>B</span>
                        <span class="caption">Satisfied customers</span>
                    </div>
                  </div><!-- counter-item end--> --}}
                </div>
                <div class="col-lg-12 col-sm-6 mb-none-30 mt-sm-0 mt-5">
                  <div class="counter-item style--two mb-30">
                    <div class="counter-icon">
                        <img src="assets/images/icons/about/4.svg" alt="icon">
                    </div>
                    <div class="counter-content pl-0">
                        <span>$</span>
                        <span class="counter">14</span>
                        <span>k</span>
                        <span class="caption">Average Investment</span>
                    </div>
                  </div><!-- counter-item end-->
                  {{-- <div class="counter-item style--two mb-30">
                      <div class="counter-icon">
                          <img src="assets/images/icons/about/5.svg" alt="icon">
                      </div>
                      <div class="counter-content pl-0">
                          <span>$</span>
                          <span class="counter">20</span>
                          <span>k</span>
                          <span class="caption">Financial Products</span>
                      </div>
                    </div><!-- counter-item end--> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
               <div class="about-content">
                  <div class="section-header">
                      <h1 class="section-title section-subtitle">About Us</h1>
                     {{-- <span class="section-subtitle">Earn The Big Money</span>
                     <h2 class="section-title">Affiliate Program</h2>
                     <p>To meet <a href="#0">today's challenges</a>, we've created a unique fund management system</p> --}}
                  </div>
                  <div style="text-align: justify">
                    <p>ProReturns is one of the leading platforms in Switzerland offering Crude Oil Investments, Forex, Marijuana,
                        Cryptocurrency, Stock Indices, Real Estate and Commodities. Regulated by the CFTC and with a branch in New York, with member funds held in segregated accounts in major US banks, ProReturns offers secure and
                        innovative ways to participate in investment.</p>
                    <p>ProReturns is a global online investment platform which began with an idea that sparked in 2014. The
                        platform allows qualifying investors to invest in financial innovation including FinTech (Financial
                        Technology) companies, funds and other new alternative financial products.</p>
                    <p>We realized that due to currency shocks, high inflation rates and the impact of devaluation, most
                        investment opportunities across emerging markets do not yield enough Proreturns for investors to grow
                        their wealth. This makes it difficult for people in these markets to achieve their financial goals.</p>
                    <p>To solve this problem, we built ProReturns as a simple way of connecting our users to dollar-denominated
                        investments in developed markets, managed by a world class team using smart algorithms to guide our
                        decisions, while helping our users become more financially successful.</p>
                    <p>Starting with the United States stock market, we are creating a unified, global and borderless
                        investment market. ProReturns’ first product is a fast and easy platform that offers investments from all
                        over the world to people in more than 170 countries.</p>
                </div>
                  {{-- <a href="#0" class="btn btn-primary btn-hover text-small">read more</a> --}}
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about-section end -->

   <!-- global-section start -->
   <section class="global-section">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-xl-4 order-xl-1 order-2">
          <div class="global-content">
            <div class="section-header">
              <span class="section-subtitle">Take A Look</span>
              <h2 class="section-title">Global Presence</h2>
            </div>
            <p>We are 100% funded from our own platform with a team of over 300 professional FinTech investors
                who all believe the future of finance looks very different from today. Their experience and background
                cover most areas in finance, technology and startups.</p>
            {{-- <a href="#0" class="btn btn-primary btn-hover">get started</a> --}}
          </div>
        </div>
        <div class="col-xl-6 order-xl-2 order-1 map-bg">
          <img src="assets/images/elements/map.png" alt="image">
        </div>
      </div>
    </div>
   </section>

   <section id="contact" class="w3-row w3-center w3-margin" style="margin-top: 50px !important; margin-bottom: 50px !important">
       <div class="w3-col s12 m4 l4 w3-center" style="text-align: center">
           <h2>Contact Us</h2>
       </div>
       <br>
       <div class="w3-col s12 m8 l8 w3-left" style="text-align: left">
           <div style="w3-margin">
                <h3 style="display: inline">Phone:</h3> <span><a href="tel:+15108380914">+15108380914</a></span> <br> <br>

           </div>

           <div style="w3-margin">
                <h3 style="display: inline">Email:</h3> <span><a href="mailto:info@proreturns.net">info@proreturns.net</a></span> <br><br>
            </div>

            <div style="w3-margin">
                <h3 style="display: inline">Address:</h3> <span>United states branch. IA (IOWA).
                    2108 Greene st, box 5906, Columbia SC 29205</span> <br> <br>
        </div>

       </div>
   </section>
   <!-- global-section end -->

   <!-- choose-us-section start -->
   {{-- <section class="choose-us-section pt-120 pb-120">
     <div class="animated-round"></div>
    <div class="container-fluid">
      <div class="row justify-content-xl-start justify-content-lg-center">
        <div class="col-xl-5 offset-xl-5 col-lg-6">
          <div class="section-header text-xl-left text-center">
            <span class="section-subtitle">A Few Reasons Why</span>
            <h2 class="section-title">Investors Choose Us</h2>
            <p>Our service gives you better result and savings, as per your requirement and you can manage your investments from anywhere either form home or work place, at any time.</p>
          </div>
        </div>
      </div>
      <div class="row align-content-center">
        <div class="col-xl-5">
          <div class="video-area">
            <img src="assets/images/elements/makbook.png" alt="image">
            <a href="#0" class="round-video-btn"><i class="fa fa-play"></i></a>
          </div>
        </div>
        <div class="col-xl-7 mt-xl-0 mt-5">
          <div  class="choose-us-slider__four owl-carousel">
            <div class="choose-item style--two text-center">
              <div class="choose-icon">
                <img src="assets/images/icons/choose-us/1.svg" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item style--two text-center">
              <div class="choose-icon">
                <img src="assets/images/icons/choose-us/1.svg" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item style--two text-center">
              <div class="choose-icon">
                <img src="assets/images/icons/choose-us/1.svg" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
              </div>
            </div><!-- choose-item end -->
            <div class="choose-item style--two text-center">
              <div class="choose-icon">
                <img src="assets/images/icons/choose-us/1.svg" alt="image">
              </div>
              <div class="choose-content">
                <h3 class="title">Fast Profit </h3>
                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
              </div>
            </div><!-- choose-item end -->
          </div>
        </div>
      </div>
    </div>
   </section> --}}
   <!-- choose-us-section end -->

   <!-- team-section start -->
   {{-- <section class="team-section gradient-overlay bg_img pt-120" data-background="assets/images/team-section-bg.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center text-white">
            <span class="section-subtitle">Meet our Creative</span>
            <h2 class="section-title">Management Team</h2>
            <p>Our team of creative programmers, marketing experts, and members of the global investment community have worked together to build the ultimate investment site, happy Investor reminds us how lucky .we are to be doing what we love.</p>
          </div>
        </div>
      </div>
      <div class="team-slider owl-carousel">
          <div class="team-item">
            <div class="thumb">
              <img src="assets/images/team/1.png" alt="image">
            </div>
            <div class="content text-center">
              <h4 class="name">al burns</h4>
              <span class="designation">ceo</span>
              <ul class="socials-links">
                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div><!-- team-item end -->
          <div class="team-item">
            <div class="thumb">
              <img src="assets/images/team/2.png" alt="image">
            </div>
            <div class="content text-center">
              <h4 class="name">Rosie Holt </h4>
              <span class="designation">Advisory Member</span>
              <ul class="socials-links">
                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div><!-- team-item end -->
          <div class="team-item">
            <div class="thumb">
              <img src="assets/images/team/3.png" alt="image">
            </div>
            <div class="content text-center">
              <h4 class="name">Tony Welch</h4>
              <span class="designation">IT Specialist</span>
              <ul class="socials-links">
                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div><!-- team-item end -->
          <div class="team-item">
            <div class="thumb">
              <img src="assets/images/team/4.png" alt="image">
            </div>
            <div class="content text-center">
              <h4 class="name">Robin Price</h4>
              <span class="designation">Consultant</span>
              <ul class="socials-links">
                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div><!-- team-item end -->
          <div class="team-item">
            <div class="thumb">
              <img src="assets/images/team/1.png" alt="image">
            </div>
            <div class="content text-center">
              <h4 class="name">al burns</h4>
              <span class="designation">ceo</span>
              <ul class="socials-links">
                <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div><!-- team-item end -->
      </div>
    </div>
   </section> --}}
   <!-- team-section end -->

   <!-- partner-section start -->
  {{-- <section class="partner-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="partner-wrapper">
            <div class="partner-single wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s">
              <div class="partner-single-inner">
                <img src="assets/images/partners/1.png" alt="image">
              </div>
            </div><!-- partner-single end -->
            <div class="partner-single wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="partner-single-inner">
                <img src="assets/images/partners/2.png" alt="image">
              </div>
            </div><!-- partner-single end -->
            <div class="partner-single wow zoomIn" data-wow-duration="0.7s" data-wow-delay="0.5s">
              <div class="partner-single-inner">
                <img src="assets/images/partners/3.png" alt="image">
              </div>
            </div><!-- partner-single end -->
            <div class="partner-single wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.5s">
              <div class="partner-single-inner">
                <img src="assets/images/partners/4.png" alt="image">
              </div>
            </div><!-- partner-single end -->
            <div class="partner-single wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
              <div class="partner-single-inner">
                <img src="assets/images/partners/5.png" alt="image">
              </div>
            </div><!-- partner-single end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-header text-lg-left text-center">
            <span class="section-subtitle">Let’s see our</span>
            <h2 class="section-title">Trusted Partners</h2>
            <p>We’re committed to making our clients successful by becoming their partners and trusted advisors .behoof believes in being your trusted partner and earning that trust through confidence and performance in service and support.</p>
            <a href="#0" class="btn btn-primary btn-hover text-small">join with us</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!-- partner-section end -->
    {{-- stop --}}
@endsection
