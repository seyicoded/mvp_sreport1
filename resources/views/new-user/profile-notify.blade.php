@extends('new-user.layout.app')
@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
          <div class="container-xl wide-lg">
            <div class="nk-content-inner">
              <div class="nk-content-body">
                <div class="nk-block-head">
                  <div class="nk-block-head-content">
                    <div class="nk-block-head-sub">
                      <a class="back-to" href="{{url('profile')}}"
                        ><em class="icon ni ni-arrow-left"></em
                        ><span>My Profile</span></a
                      >
                    </div>
                    <h2 class="nk-block-title fw-normal">
                      Account Notification
                    </h2>
                    <div class="nk-block-des">
                      <p>
                        You have full control to manage your own account
                        setting.
                        <span class="text-primary"
                          ><em class="icon ni ni-info"></em
                        ></span>
                      </p>
                    </div>
                  </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('profile')}}">Personal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('profile-kyc')}}"
                      >KYC<span class="d-none s-sm-inline">
                        KYC</span
                      ></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"
                      >Notifications</a
                    >
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="profile-connected.html"
                      >Connect Social</a
                    >
                  </li> --}}
                </ul>
                <div class="nk-block">
                  <div class="nk-block-head">
                    <div class="nk-block-head-content">
                      <h5 class="nk-block-title">Notification Settings</h5>
                      <div class="nk-block-des">
                        <p>You will get only notification what have enabled.</p>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                      <h6>Security Alerts</h6>
                      <div class="nk-block-des">
                        <p>
                          You will get only those email notification what you
                          want.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block-content">
                    <div class="gy-3">
                      <div class="g-item">
                        <div class="custom-control custom-switch">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            onchange="changeval(1)"
                            @if (intval($investor['investor']->noti1) == 1)
                                checked
                            @endif
                            
                            id="unusual-activity"
                          /><label
                            class="custom-control-label"
                            for="unusual-activity"
                            >Email me whenever encounter unusual activity</label
                          >
                        </div>
                      </div>
                      <div class="g-item">
                        <div class="custom-control custom-switch">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="new-browser"
                            onchange="changeval(2)"
                            @if (intval($investor['investor']->noti2) == 1)
                                checked
                            @endif
                          /><label
                            class="custom-control-label"
                            for="new-browser"
                            >Email me if new browser is used to sign in</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                      <h6 class="nk-block-title-sm">News</h6>
                      <div class="nk-block-des">
                        <p>
                          You will get only those email notification what you
                          want.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="nk-block-content">
                    <div class="gy-3">
                      <div class="g-item">
                        <div class="custom-control custom-switch">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            onchange="changeval(3)"
                            @if (intval($investor['investor']->noti3) == 1)
                                checked
                            @endif
                            id="latest-sale"
                          /><label
                            class="custom-control-label"
                            for="latest-sale"
                            >Notify me by email about sales and latest
                            news</label
                          >
                        </div>
                      </div>
                      <div class="g-item">
                        <div class="custom-control custom-switch">
                          <input
                            type="checkbox"
                            onchange="changeval(4)"
                            class="custom-control-input"
                            id="feature-update"
                            @if (intval($investor['investor']->noti4) == 1)
                                checked
                            @endif
                          /><label
                            class="custom-control-label"
                            for="feature-update"
                            >Email me about new features and updates</label
                          >
                        </div>
                      </div>
                      <div class="g-item">
                        <div class="custom-control custom-switch">
                          <input
                            type="checkbox"
                            onchange="changeval(5)"
                            class="custom-control-input"
                            @if (intval($investor['investor']->noti5) == 1)
                                checked
                            @endif
                            id="account-tips"
                          /><label
                            class="custom-control-label"
                            for="account-tips"
                            >Email me about tips on using account</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
            const changeval = (id)=>{
                $.get('{{url('change_noti_pref')}}', {id: id});
            }
        </script>
@endsection
