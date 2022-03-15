@extends('new-user.layout.app')
@section('content')
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
      <div class="nk-content-inner">
        <div class="nk-content-body">
          <div class="nk-block-head">
            <div class="nk-block-between-md g-3">
              <div class="nk-block-head-content">
                <div class="nk-block-head-sub"><span>Welcome!</span></div>
                <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                  <div>
                    <h2 class="nk-block-title fw-normal">
                      {{($investor['data']->first_name == null) ? 'Sir ___ ____':$investor['data']->first_name}}
                    </h2>
                  </div>
                  <div>
                    <a href="{{url('myi-plan')}}" class="btn btn-white btn-light"
                      >My Plans
                      <em class="icon ni ni-arrow-long-right ml-2"></em
                    ></a>
                  </div>
                </div>
                <div class="nk-block-des">
                  <p>
                    At a glance summary of your investment account. Have
                    fun!
                  </p>
                </div>
              </div>
              {{-- <div class="nk-block-head-content d-none d-md-block">
                <div class="nk-slider nk-slider-s1">
                  <div
                    class="slider-init"
                    data-slick='{"dots": true, "arrows": false, "fade": true}'
                  >
                    <div class="slider-item">
                      <div class="nk-iv-wg1">
                        <div class="nk-iv-wg1-sub sub-text">
                          My Active Plans
                        </div>
                        <h6 class="nk-iv-wg1-info title">
                          Silver - 4.76% for 21 Days
                        </h6>
                        <a href="#" class="nk-iv-wg1-link link link-light"
                          ><em class="icon ni ni-trend-up"></em>
                          <span>Check Details</span></a
                        >
                        <div class="nk-iv-wg1-progress">
                          <div
                            class="progress-bar bg-primary"
                            data-progress="80"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-item">
                      <div class="nk-iv-wg1">
                        <div class="nk-iv-wg1-sub sub-text">
                          My Active Plans
                        </div>
                        <h6 class="nk-iv-wg1-info title">
                          Silver - 4.76% for 21 Days
                        </h6>
                        <a href="#" class="nk-iv-wg1-link link link-light"
                          ><em class="icon ni ni-trend-up"></em>
                          <span>Check Details</span></a
                        >
                        <div class="nk-iv-wg1-progress">
                          <div
                            class="progress-bar bg-primary"
                            data-progress="80"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-item">
                      <div class="nk-iv-wg1">
                        <div class="nk-iv-wg1-sub sub-text">
                          My Active Plans
                        </div>
                        <h6 class="nk-iv-wg1-info title">
                          Silver - 4.76% for 21 Days
                        </h6>
                        <a href="#" class="nk-iv-wg1-link link link-light"
                          ><em class="icon ni ni-trend-up"></em>
                          <span>Check Details</span></a
                        >
                        <div class="nk-iv-wg1-progress">
                          <div
                            class="progress-bar bg-primary"
                            data-progress="80"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="slider-dots"></div>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="nk-block">
            <div class="nk-news card card-bordered">
              
                
                <?php
                    if(($investor['data']->status) == 0) {
                    ?>
                    <div class="card-inner">
                        <div class="nk-news-list">
                            <a class="nk-news-item" href="#"
                              ><div class="nk-news-icon">
                                <em style="color: red" class="icon ni ni-user-cross-fill"></em>
                              </div>
                              <div class="nk-news-text">
                                <p>
                                  Please Verify your authencity to enable you full access to all features
                                  <span>
                                    verify now....</span
                                  >
                                </p>
                                <em class="icon ni ni-external"></em></div
                            ></a>
                          </div>

                          </div>
                    <?php                    
                    }
                ?>
                

              
            </div>
          </div>
          <div class="nk-block">
            <div class="row gy-gs">
              <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card is-dark card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          Deposit Balance
                          <em class="icon ni ni-info"></em>
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->deposit_balance}}
                          {{-- <span class="change up">
                          <span class="sign"></span>3.4%</span
                          > --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card is-s1 card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          Return on Investment 
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->return_investment}}
                          <span class="change up"
                            ><span class="sign"></span>{{$investor['investor']->return_on_i_pect}}</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="nk-wg-card is-s3 card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          Investment Duration <em class="icon ni ni-info"></em>
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->investment_duration}}
                          {{-- <span class="change down"
                            ><span class="sign"></span>1.4%</span
                          > --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- second --}}
          <div class="nk-block">
            <div class="row gy-gs">
              <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card is-dark card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          Start Date
                          <em class="icon ni ni-info"></em>
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->available_balance}}
                          {{-- <span class="change up"
                            ><span class="sign"></span>3.4%</span
                          > --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card is-s1 card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          End Date
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->toal_invested}}
                          {{-- <span class="change up"
                            ><span class="sign"></span>2.8%</span
                          > --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="nk-wg-card is-s3 card card-bordered">
                  <div class="card-inner">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          Status 
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount">
                          {{$investor['investor']->total_profits}}
                          {{-- <span class="change down"
                            ><span class="sign"></span>1.4%</span
                          > --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nk-block">
            <div class="row gy-gs">
              {{-- <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card card card-bordered h-100">
                  <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">Balance in Account</h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount ui-v2">
                          12,587.96
                        </div>
                        <ul class="nk-iv-wg2-list">
                          <li>
                            <span class="item-label">Available Funds</span
                            ><span class="item-value">105.94</span>
                          </li>
                          <li>
                            <span class="item-label">Invested Funds</span
                            ><span class="item-value">12,582.02</span>
                          </li>
                          <li class="total">
                            <span class="item-label">Total</span
                            ><span class="item-value">12,587.96</span>
                          </li>
                        </ul>
                      </div>
                      <div class="nk-iv-wg2-cta">
                        <a
                          href="#"
                          class="btn btn-primary btn-lg btn-block"
                          >Withdraw Funds</a
                        ><a href="#" class="btn btn-trans btn-block"
                          >Deposit Funds</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6 col-lg-4">
                <div class="nk-wg-card card card-bordered h-100">
                  <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">
                          This Month Profit
                          <em class="icon ni ni-info text-primary"></em>
                        </h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount ui-v2">
                          1,457.23
                          <span class="change up"
                            ><span class="sign"></span>4.5%</span
                          >
                        </div>
                        <ul class="nk-iv-wg2-list">
                          <li>
                            <span class="item-label">Profits</span
                            ><span class="item-value">1,045.21</span>
                          </li>
                          <li>
                            <span class="item-label">Referrals</span
                            ><span class="item-value">212.02</span>
                          </li>
                          <li>
                            <span class="item-label">Rewards</span
                            ><span class="item-value">200.00</span>
                          </li>
                          <li class="total">
                            <span class="item-label">Total Profit</span
                            ><span class="item-value">1,457.23</span>
                          </li>
                        </ul>
                      </div>
                      <div class="nk-iv-wg2-cta">
                        <a
                          href="#"
                          class="btn btn-primary btn-lg btn-block"
                          >Invest & Earn</a
                        >
                        <div class="cta-extra">
                          Earn up to 25$
                          <a href="#" class="link link-dark"
                            >Refer friend!</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-12 col-lg-4">
                <div class="nk-wg-card card card-bordered h-100">
                  <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                      <div class="nk-iv-wg2-title">
                        <h6 class="title">My Investment</h6>
                      </div>
                      <div class="nk-iv-wg2-text">
                        <div class="nk-iv-wg2-amount ui-v2">
                          319 <span class="sub">03</span> Active
                        </div>
                        <ul class="nk-iv-wg2-list">
                          <li>
                            <span class="item-label"
                              ><a href="#">Silver</a>
                              <small>- 4.76% for 21 Days</small></span
                            ><span class="item-value">2,500.00</span>
                          </li>
                          <li>
                            <span class="item-label"
                              ><a href="#">Silver</a>
                              <small>- 4.76% for 21 Days</small></span
                            ><span class="item-value">2,000.00</span>
                          </li>
                          <li>
                            <span class="item-label"
                              ><a href="#">Dimond</a>
                              <small>- 14.29% for 14 Days</small></span
                            ><span class="item-value">8,000.00</span>
                          </li>
                          <li>
                            <span class="item-label"
                              ><a href="#">Starter</a>
                              <small>- 1.67% for 30 Days</small></span
                            ><span class="item-value">335.00</span>
                          </li>
                        </ul>
                      </div>
                      <div class="nk-iv-wg2-cta">
                        <a href="#" class="btn btn-light btn-lg btn-block"
                          >See all Investment</a
                        >
                        <div class="cta-extra">
                          Check out
                          <a href="#" class="link link-dark"
                            >Analytic Report</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
          {{-- <div class="nk-block">
            <div class="card card-bordered">
              <div class="nk-refwg">
                <div class="nk-refwg-invite card-inner">
                  <div class="nk-refwg-head g-3">
                    <div class="nk-refwg-title">
                      <h5 class="title">Refer Us & Earn</h5>
                      <div class="title-sub">
                        Use the bellow link to invite your friends.
                      </div>
                    </div>
                    <div class="nk-refwg-action">
                      <a href="#" class="btn btn-primary">Invite</a>
                    </div>
                  </div>
                  <div class="nk-refwg-url">
                    <div class="form-control-wrap">
                      <div
                        class="form-clip clipboard-init"
                        data-clipboard-target="#refUrl"
                        data-success="Copied"
                        data-text="Copy Link"
                      >
                        <em class="clipboard-icon icon ni ni-copy"></em>
                        <span class="clipboard-text">Copy Link</span>
                      </div>
                      <div class="form-icon">
                        <em class="icon ni ni-link-alt"></em>
                      </div>
                      <input
                        type="text"
                        class="form-control copy-text"
                        id="refUrl"
                        value="https://dashlite.net/?ref=4945KD48"
                      />
                    </div>
                  </div>
                </div>
                <div class="nk-refwg-stats card-inner bg-lighter">
                  <div class="nk-refwg-group g-3">
                    <div class="nk-refwg-name">
                      <h6 class="title">
                        My Referral
                        <em
                          class="icon ni ni-info"
                          data-toggle="tooltip"
                          data-placement="right"
                          title="Referral Informations"
                        ></em>
                      </h6>
                    </div>
                    <div class="nk-refwg-info g-3">
                      <div class="nk-refwg-sub">
                        <div class="title">394</div>
                        <div class="sub-text">Total Joined</div>
                      </div>
                      <div class="nk-refwg-sub">
                        <div class="title">548.49</div>
                        <div class="sub-text">Referral Earn</div>
                      </div>
                    </div>
                    <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                      <a
                        href="#"
                        class="btn btn-icon btn-trigger"
                        data-toggle="dropdown"
                        ><em class="icon ni ni-more-h"></em
                      ></a>
                      <div
                        class="dropdown-menu dropdown-menu-xs dropdown-menu-right"
                      >
                        <ul class="link-list-plain sm">
                          <li><a href="#">7 days</a></li>
                          <li><a href="#">15 Days</a></li>
                          <li><a href="#">30 Days</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="nk-refwg-ck">
                    <canvas
                      class="chart-refer-stats"
                      id="refBarChart"
                    ></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
