@extends('layout.app')
@section('content')
      <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/investment.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Dashboard</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#0">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->
  <br />

  <section class="container">
      <div style="display: flex; justify-content: center; align-items: center">
        <span class="banner-sub-title" style="cursor: pointer" onclick="window.location.href = '{{url('/investment')}}'">CLICK TO VIEW AVAILABLE INVESTMENT OFFERS</span>
      </div>

      <br/>

    <div>
        <h2 class="w3-text-grey">My Investments</h2>

        <style>
            .investment-single > .content{
                width: 100% !important;
                /* display: flex; */
            }
            .investment-single .content .left{
                width: 90% !important;
            }

            .investment-single .content .right{
            }
        </style>

        {{-- start --}}
        <div class="container">

            @foreach ($data as $dt)
                <div class="row mt-4 mb-none-30 investment-item-area list-view">
                    <div class="col-lg-6 investment-item">
                    <div class="investment-single mb-30">
                        {{-- <div class="thumb  bg_img" data-background="assets/images/investment/{{rand(1, 7)}}.jpg">
                        <div class="icon"><img src="assets/images/icons/investment/1.png" alt="image"></div>
                        </div> --}}
                        <div class="content">
                        <div class="left">
                            <h3 class="investment-title">{{(DB::select('SELECT * from packages where p_id = ?', [$dt->p_id]))[0]->p_name}}</h3>
                            <p>daily rate: {{(floatval($dt->i_rate) / floatval($dt->i_duration))}}% of amount investror</p>
                            <div class="d-flex flex-wrap mt-5">
                            <div class="icon-item d-flex flex-wrap">
                                <div class="icon"><i class="icofont-wall-clock"></i></div>
                                <div class="content">
                                <span class="counter">{{$dt->i_duration}} Days</span>
                                <p>Durations</p>
                                </div>
                            </div><!-- icon-item end -->
                            <div class="icon-item d-flex flex-wrap">
                                <div class="icon"><i class="icofont-wall-clock"></i></div>
                                <div class="content">
                                <span class="counter">{{$dt->day_count}}</span><span>Days</span>
                                <p>Day Invested</p>
                                </div>
                            </div><!-- icon-item end -->
                            </div>
                            <div class="shares-part">
                            <div class="share-item">
                                <span class="caption">Amount Invested</span>
                                <h4 class="amount">{{number_format($dt->i_amount).' '.$dt->i_currency}}</h4>
                            </div><!-- share-item end -->
                            <div class="share-item">
                                <span class="caption">Amount Generated</span>
                                <h4 class="amount">{{number_format($dt->g_amount).' '.$dt->i_currency}}</h4>
                            </div><!-- share-item end -->
                            <div class="share-item">
                                <span class="caption">Total Withdrawable</span>
                                <h4 class="amount">{{number_format(intval($dt->i_amount)+intval($dt->g_amount)).' '.$dt->i_currency}}</h4>
                            </div><!-- share-item end -->
                            </div><!-- shares-part end -->
                        </div>
                        <div class="right">
                            <div style="position: absolute; right: 3%; top: 3%">
                                @switch(intval($dt->status))
                                    @case(0)
                                        Pending Payment
                                        @break
                                    @case(1)
                                        (Paid) Pending Admin Approval
                                        @break
                                    @case(2)
                                        Active
                                        @break
                                    @case(3)
                                        Finished
                                        @break
                                    @case(4)
                                        Pending Withdrawal
                                        @break
                                    @case(5)
                                        Withdrew
                                        @break
                                    @case(6)
                                        Cancelled
                                        @break

                                    @default

                                @endswitch
                            </div>
                            <button class="btn btn-primary btn-hover text-small" title="once investment has been filfulled" {{intval($dt->status) == 3 ? '': 'disabled'}} onclick="window.location.href = '{{url('/request-withdrawal/'.$dt->sl_id)}}'">WITHDRAW</button>
                            {{-- <a href="#0" class="add-wishlist"><i class="fa fa-heart"></i> Add to wish list</a> --}}
                        </div>
                        </div>
                    </div>
                    </div><!-- investment-single end -->

                </div>
            @endforeach


        </div>

        {{-- stop --}}
    </div>

    </section>
@endsection
