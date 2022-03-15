@extends('layout.app')
@section('content')
    <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/investment.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Investment</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item">Investment</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="investment-section pb-120">
      <!-- inner-page-banner-section end -->
    {{-- start --}}
    <div class="filter-area">
        <div class="filter-left">
          <a href="#0" class="item-view-btn grid-view"><i class="fa fa-th"></i></a>
          <a href="#0" class="item-view-btn list-view active"><i class="fa fa-bars"></i></a>
    </div>

      </div>
    {{--  --}}
    <div class="container">
        @foreach ($data as $dt)
            <div class="row mt-4 mb-none-30 investment-item-area list-view">
                <div class="col-lg-6 investment-item">
                <div class="investment-single mb-30">
                    <div class="thumb  bg_img" data-background="assets/images/investment/{{rand(1, 7)}}.jpg">
                    <div class="icon"><img src="assets/images/icons/investment/1.png" alt="image"></div>
                    </div>
                    <div class="content">
                    <div class="left">
                        <h3 class="investment-title">{{$dt['p_name']}}</h3>
                        <p>{{$dt['p_desc']}}</p>
                        <div class="share-price"><h3 class="price">$3.00<small>/per share</small></h3></div>
                        <div class="d-flex flex-wrap mt-5">
                        <div class="icon-item d-flex flex-wrap">
                            <div class="icon"><i class="icofont-ui-user-group"></i></div>
                            <div class="content">
                            <span class="counter">442</span>
                            <p>investors</p>
                            </div>
                        </div><!-- icon-item end -->
                        <div class="icon-item d-flex flex-wrap">
                            <div class="icon"><i class="icofont-wall-clock"></i></div>
                            <div class="content">
                            <span class="counter">{{$dt['duration']}}</span><span>Days</span>
                            <p>Hold Duration</p>
                            </div>
                        </div><!-- icon-item end -->
                        </div>
                        <div class="shares-part">
                        <div class="share-item">
                            <span class="caption">Daily Return Rate</span>
                            <h4 class="amount">{{(floatval($dt['interest_rate']) / floatval($dt['duration']))}}%</h4>
                        </div><!-- share-item end -->
                        <div class="share-item">
                            <span class="caption">Duration RATE INTEREST Return</span>
                            <h4 class="amount">{{$dt['interest_rate']}}%</h4>
                        </div><!-- share-item end -->
                        </div><!-- shares-part end -->
                    </div>
                    <div class="right">
                        <div class="share-price"><h3 class="price">{{number_format($dt['p_amount']).' '.$dt['p_currency']}}</h3></div>
                        <a href="{{url('/checkouts:'.$dt['p_id'])}}" class="btn btn-primary btn-hover text-small">invest now</a>
                        {{-- <a href="#0" class="add-wishlist"><i class="fa fa-heart"></i> Add to wish list</a> --}}
                    </div>
                    </div>
                </div>
                </div><!-- investment-single end -->

            </div>

        @endforeach

    </div>
    {{-- stop --}}
  </section>

@endsection
