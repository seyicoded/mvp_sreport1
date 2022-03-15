@extends('layout.app')
@section('content')
    <style>
        .faq-content{
            padding: 1% 5%
        }
        .faq-content div {
            margin-bottom: 24px;
            text-align: justify
        }
        .faq-content div p {
            color: gray
        }

        [data-title]:hover:after {
            opacity: 1;
            transition: all 0.1s ease 0.5s;
            visibility: visible;
        }
        [data-title]:after {
            content: attr(data-title);
            background-color: rgba(255, 255, 255, 1);
            color: #111;
            position: absolute;
            padding: 1px 5px 2px 5px;
            bottom: -1.6em;
            left: 1%;
            /* white-space: nowrap; */
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            opacity: 0;
            border: 1px solid #111111;
            z-index: 99999;
            visibility: hidden;
            width: 300px;
            word-wrap: break-word;
            word-break: break-all;
            font-size: 12.4px;
            overflow: hidden;
            elavation: 11;
        }
        [data-title] {
            position: relative;
        }
    </style>
    <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/help.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Help Center</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                            <li class="breadcrumb-item">Help Center</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->

  <br />
  <div style="margin: 30px">&nbsp;</div>

  <!-- question-section start -->
  <section class="question-section pb-120" id="faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-subtitle">got any questions</span>
            <h2 class="section-title">We've Got Answers</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="help-question-list" style="text-align: center">
            <li><a href="#1" data-title="you can withdraw on maturity, and the shortest duration is 3 months. All withdrawal requests are processed within 24 hours.">When can I withdraw my investments?</a></li>
            <li><a href="#2" data-title="Pro-Returns works like a personal investment manager and adviser that lives on your smartphone, helping you invest in dollar
                denominated assets carefully selected to deliver safe, consistent dollar returns over time.">How does Pro-Returns work?</a></li>
            <li><a href="#3" data-title="Pro-Returns is the only platform that allows you to allocate capital across a portfolio of US stocks, US rental properties and global fixed income assets, all in dollars. We vet the assets for quality, long term potential and their capacity to deliver stable returns for you in all market conditions.">What kind of investments do I get with Pro-Returns?</a></li>

            <li style="width: 100% !important"><a href="#5" data-title="Pro-Returns is registered in USA and invests globally through a registered and regulated investment advisory (RIA) firm in the
                US. All our investments are held with regulated third parties and we also work with ARM Trustees to provide oversight for
                our users.">How is Pro-Returns Regulated?</a></li>

            <li><a href="#4">What is the minimum investment?</a></li>
            <li><a href="#6" data-title="No. Pro-Returns is a digital wealth manager, we provide managed portfolios selected and managed through our app. Users cannot
                trade or pick securities by themselves.">Can I trade on Pro-Returns?</a></li>
            <li><a href="#7" data-title="We currently adopt the use of cryptocurrency for deposits and payment of ROIs. Due to its speed and convenience.">What payment methods are available?</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- question-section end -->

  {{-- <section class="faq-content">
      <div id="1">
            <h1>
              When can I withdraw my investments?
            </h1>
            <p>
                you can withdraw on maturity, and the shortest duration is 3 months. All withdrawal requests are processed within 24 hours.
            </p>
      </div>

      <div id="2">
                <h1>
                    How does Rise work?
                </h1>
                <p>
                    Pro-Returns works like a personal investment manager and adviser that lives on your smartphone, helping you invest in dollar
denominated assets carefully selected to deliver safe, consistent dollar returns over time.
                </p>
        </div>

  <div id="3">
        <h1>
            What kind of investments do I get with Rise?
        </h1>
        <p>
            Pro-Returns is the only platform that allows you to allocate capital across a portfolio of US stocks, US rental properties and global fixed income assets, all in dollars. We vet the assets for quality, long term potential and their capacity to deliver stable returns for you in all market conditions.
        </p>
    </div>

    <div id="4">
        <h1>
            What is the minimum investment?
        </h1>
        <p>
            You can start investing from just $1000 and there is no maximum. Pro-Returns can invest for you whether you’re just starting your
journey or you have millions in capital to preserve.
        </p>
    </div>

    <div id="5">
        <h1>
            How is Rise Regulated?
        </h1>
        <p>
            Pro-Returns is registered in USA and invests globally through a registered and regulated investment advisory (RIA) firm in the
            US. All our investments are held with regulated third parties and we also work with ARM Trustees to provide oversight for
            our users.
        </p>
    </div>

    <div id="6">
        <h1>
            Can I trade on Rise?
        </h1>
        <p>
            No. Pro-Returns is a digital wealth manager, we provide managed portfolios selected and managed through our app. Users cannot
trade or pick securities by themselves.
        </p>
    </div>

    <div id="7">
        <h1>
            What payment methods are available?
        </h1>
        <p>
            We currently adopt the use of cryptocurrency for deposits and payment of ROIs. Due to its speed and convenience.
        </p>
    </div>
  </section> --}}

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
                <h3 style="display: inline">Email:</h3> <span><a href="mailto:info@pro-returns.net">info@pro-returns.net</a></span> <br><br>
            </div>

            <div style="w3-margin">
                <h3 style="display: inline">Address:</h3> <span>United states branch. IA (IOWA).
                    2108 Greene st, box 5906, Columbia SC 29205</span> <br> <br>
        </div>

        </div>
    </section>
@endsection
