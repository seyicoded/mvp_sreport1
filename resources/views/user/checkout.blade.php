@extends('layout.app')
@section('content')
    <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/investment.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Checkout</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                            <li class="breadcrumb-item">Cart Pages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->

  <!-- checkout-section start -->
  <section class="checkout-section pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-area">
            <div class="checkout-wrapper">
              <div class="checkout-message">
                <p>Hey! Nice selection of items there.Please review your investment order below
                  and follow the next quick steps to complete your order.</p>
              </div>
              <div class="cart-table-area">
                <table class="cart-table">
                  <thead>
                    <tr>
                      <th>Investment</th>
                      <th>Duration</th>
                      <th>Interest Gain</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="product">
                          <span class="name">{{$data['p_name']}}</span>
                        </div>
                      </td>
                      <td>
                        <div class="product">
                            <span class="name">{{$data['duration']}} Days</span>
                        </div>
                      </td>
                      <td>
                        <span class="name">{{$data['interest_rate']}}%</span>
                      </td>
                      <td>
                        <span class="name">{{number_format($data['p_amount']).' '.$data['p_currency']}}</span>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div><!-- cart-table-area end -->
              <div class="cart-total">
                <span class="caption">Total to Pay:</span>
                <span class="total-amount">{{number_format($data['p_amount']).' '.$data['p_currency']}}</span>
              </div>
              <div class="payment-methods-wrapper">
                <h3 class="title">Payment Method</h3>
                <span class="subtitle">Choose a payment method </span>
                <div class="payment-method-slider owl-carousel">
                  {{-- <a href="#0" onclick="update_pm('flutterwave')" class="card-item">
                    <span class="icon"><img src="assets/images/icons/payment-option/card.svg" alt="image"></span>
                    <span class="caption">Flutterwave</span>
                  </a><!-- card-item end -->
                  <a href="#1" onclick="update_pm('paypal')" class="card-item">
                    <span class="icon"><img src="assets/images/icons/payment-option/paypal.svg" alt="image"></span>
                    <span class="caption">Paypal</span>
                  </a><!-- card-item end --> --}}
                  <a href="#0" onclick="update_pm('crypto')" class="card-item">
                    <span class="icon"><img src="assets/images/icons/payment-option/bitcoin.svg" alt="image"></span>
                    <span class="caption">Crypto</span>
                  </a><!-- card-item end -->

                </div>
              </div>
              <form class="mt-5 text-center" method="POST">
                  @csrf
                  <input type="hidden" name="payment_method" id="payment_method" value="crypto" required/>
                  <div id=''>Paying with: <span id="payment_method_text"></span></div>
                <button type="submit" class="btn btn-primary btn-hover btn-round">INVEST</button>
                </form>
            </div><!-- checkout-wrapper end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- checkout-section end  -->

  <script>
      function update_pm(pm){
        //   alert(pm);
          document.getElementById('payment_method').value = pm;
          document.getElementById('payment_method_text').innerHTML = pm;
      }
  </script>

@endsection
