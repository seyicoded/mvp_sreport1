@extends('layout.app')
@section('content')
    <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/investment.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Payment</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#0">Home</a></li>
                            <li class="breadcrumb-item"><a href="#0">Checkout</a></li>
                            <li class="breadcrumb-item">Payment</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->
  <section class="w3-container">
      <div class="" style="display: flex; align-items: center; justify-content: center">
        <div style="width: 60%" class="w3-card-2 w3-margin-top w3-round">
            <h1 class="w3-center">{{$type}} TRANSACTION</h1>
            <br />
            <h3 class="w3-center" style="font-weight: bolder">{{$data->i_currency.' '.$data->i_amount}}</h3>
            <br />
            <h6 class="w3-center">Address: <span style="font-weight: bold">{{$wallet}}</span></h6>
            <br />

            <form method="POST" style="width: 100%; display: flex; align-items: center; justify-content: center">
                @csrf
                <button class="btn btn-primary w3-center" type="submit">MARK AS PAID</button>
            </form>

            <br />
        </div>
      </div>
  </section>
@endsection
