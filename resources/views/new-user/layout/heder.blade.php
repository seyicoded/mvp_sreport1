<div
          class="nk-header nk-header-fluid nk-header-fixed is-theme nk-header-fixed"
        >
          <div class="container-xl wide-lg">
            <div class="nk-header-wrap">
              <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a
                  href="#"
                  class="nk-nav-toggle nk-quick-nav-icon"
                  data-target="headerNav"
                  ><em class="icon ni ni-menu"></em
                ></a>
              </div>
              <div class="nk-header-brand">
                <a
                  href="{{url('/dashboard')}}"
                  class="logo-link"
                  ><img
                    class="logo-light logo-img"
                    src="https://dashlite.net/demo6/images/logo.png"
                    srcset="/demo6/images/logo2x.png 2x"
                    alt="logo"
                  /><img
                    class="logo-dark logo-img"
                    src="https://dashlite.net/demo6/images/logo-dark.png"
                    srcset="/demo6/images/logo-dark2x.png 2x"
                    alt="logo-dark"
                  /><span class="nio-version">Invest</span></a
                >
              </div>
              <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                  <div class="nk-header-brand">
                    <a
                      href="{{url('/dashboard')}}"
                      class="logo-link"
                      ><img
                        class="logo-light logo-img"
                        src="https://dashlite.net/demo6/images/logo.png"
                        srcset="/demo6/images/logo2x.png 2x"
                        alt="logo"
                      /><img
                        class="logo-dark logo-img"
                        src="https://dashlite.net/demo6/images/logo-dark.png"
                        srcset="/demo6/images/logo-dark2x.png 2x"
                        alt="logo-dark"
                      /><span class="nio-version">Invest</span></a
                    >
                  </div>
                  <div class="nk-menu-trigger mr-n2">
                    <a
                      href="#"
                      class="nk-nav-toggle nk-quick-nav-icon"
                      data-target="headerNav"
                      ><em class="icon ni ni-arrow-left"></em
                    ></a>
                  </div>
                </div>
                <ul class="nk-menu nk-menu-main">
                  <li class="nk-menu-item">
                    <a href="{{url('dashboard')}}" class="nk-menu-link"
                      ><span class="nk-menu-text">Overview</span></a
                    >
                  </li>
                  <li class="nk-menu-item">
                    <a href="{{url('myi-plan')}}" class="nk-menu-link"
                      ><span class="nk-menu-text">MY Plan</span></a
                    >
                  </li>
                  <li class="nk-menu-item">
                    <a href="{{url('invest-plan')}}" class="nk-menu-link"
                      ><span class="nk-menu-text">Invest</span></a
                    >
                  </li>
                  <li class="nk-menu-item">
                    <a href="{{url('/profile')}}" class="nk-menu-link"
                      ><span class="nk-menu-text">Profile</span></a
                    >
                  </li>
                  {{-- <li class="nk-menu-item active has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle"
                      ><span class="nk-menu-text">Pages</span></a
                    >
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="welcome.html" class="nk-menu-link"
                          ><span class="nk-menu-text">Welcome / Intro</span></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="invest-form.html" class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >Investment Process</span
                          ></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="scheme-details.html" class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >Investment Details</span
                          ></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="kyc-application.html" class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >KYC - Get Started</span
                          ></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a href="kyc-form.html" class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >KYC - Application Form</span
                          ></a
                        >
                      </li>
                      <li class="nk-menu-item">
                        <a
                          href="https://dashlite.net/demo6/index.html"
                          class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >Main Dashboard
                            <em class="icon ni ni-external"></em> </span
                        ></a>
                      </li>
                      <li class="nk-menu-item">
                        <a
                          href="https://dashlite.net/demo6/components.html"
                          class="nk-menu-link"
                          ><span class="nk-menu-text"
                            >All Components
                            <em class="icon ni ni-external"></em></span
                        ></a>
                      </li>
                    </ul>
                  </li> --}}
                </ul>
              </div>
              <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                  <li class="dropdown notification-dropdown">
                    <a
                      href="#"
                      class="dropdown-toggle nk-quick-nav-icon"
                      data-toggle="dropdown"
                      ><div class="icon-status icon-status-info">
                        <em class="icon ni ni-bell"></em></div
                    ></a>
                    <div
                      class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1"
                    >
                      <div class="dropdown-head">
                        <span class="sub-title nk-dropdown-title"
                          >Notifications</span
                        ><a href="#">Mark All as Read</a>
                      </div>
                      <div class="dropdown-body">
                        <div class="nk-notification">
                          <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                Welcome to <span>Pro-Returns</span>
                              </div>
                              <div class="nk-notification-time">....</div>
                            </div>
                          </div>
                          {{-- <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                Your <span>Deposit Order</span> is placed
                              </div>
                              <div class="nk-notification-time">2 hrs ago</div>
                            </div>
                          </div> --}}
                          {{-- <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                You have requested to <span>Widthdrawl</span>
                              </div>
                              <div class="nk-notification-time">2 hrs ago</div>
                            </div>
                          </div> --}}
                          {{-- <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                Your <span>Deposit Order</span> is placed
                              </div>
                              <div class="nk-notification-time">2 hrs ago</div>
                            </div>
                          </div> --}}
                          {{-- <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                You have requested to <span>Widthdrawl</span>
                              </div>
                              <div class="nk-notification-time">2 hrs ago</div>
                            </div>
                          </div> --}}
                          {{-- <div class="nk-notification-item dropdown-inner">
                            <div class="nk-notification-icon">
                              <em
                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"
                              ></em>
                            </div>
                            <div class="nk-notification-content">
                              <div class="nk-notification-text">
                                Your <span>Deposit Order</span> is placed
                              </div>
                              <div class="nk-notification-time">2 hrs ago</div>
                            </div>
                          </div> --}}
                        </div>
                      </div>
                      <div class="dropdown-foot center">
                        <a href="#">View All</a>
                      </div>
                    </div>
                  </li>
                  <li class="hide-mb-sm">
                    <a href="{{url('user-logout')}}" class="nk-quick-nav-icon"
                      ><em class="icon ni ni-signout"></em
                    ></a>
                  </li>
                  <li class="dropdown user-dropdown order-sm-first">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      ><div class="user-toggle">
                        {{-- <div class="user-avatar sm">
                          <em class="icon ni ni-user-alt"></em>
                        </div> --}}
                        <div class="user-info d-none d-xl-block">
                          <div class="user-status user-status-unverified">
                              <?php
                                    $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
                                    $dt = DB::select('SELECT * from user_details where u_id = ?', [$id])[0];

                                    $status = '';
                                    switch ( intval($dt->status) ) {
                                        case 0:
                                            echo 'Unverified';
                                            break;

                                        case 1:
                                            echo '<span style="color: yellow !important">Pending</span>';
                                            break;

                                        case 2:
                                        echo '<span style="color: green !important">Verified</span>';
                                            break;

                                          case 3:
                                            echo 'Declined';
                                            break;

                                        default:
                                            # code...
                                            break;
                                    }
                                ?>


                          </div>
                          <div class="user-name">
                            {{$dt->first_name}} {{$dt->last_name}}
                          </div>
                        </div>
                      </div></a
                    >
                    {{-- <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light" >
                      <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block" >
                        <div class="user-card">
                          <div class="user-avatar"><span>AB</span></div>
                          <div class="user-info">
                            <span class="lead-text">Abu Bin Ishtiyak</span
                            ><span class="sub-text">info@softnio.com</span>
                          </div>
                          <div class="user-action">
                            <a
                              class="btn btn-icon mr-n2"
                              href="profile-setting.html"
                              ><em class="icon ni ni-setting"></em
                            ></a>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-inner user-account-info">
                        <h6 class="overline-title-alt">Account Balance</h6>
                        <div class="user-balance">
                          1,494.23
                          <small class="currency currency-usd">USD</small>
                        </div>
                        <div class="user-balance-sub">
                          Locked
                          <span
                            >15,495.39
                            <span class="currency currency-usd">USD</span></span
                          >
                        </div>
                        <a href="#" class="link"
                          ><span>Withdraw Balance</span>
                          <em class="icon ni ni-wallet-out"></em
                        ></a>
                      </div>
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <a href="profile.html"
                              ><em class="icon ni ni-user-alt"></em
                              ><span>View Profile</span></a
                            >
                          </li>
                          <li>
                            <a href="profile-setting.html"
                              ><em class="icon ni ni-setting-alt"></em
                              ><span>Account Setting</span></a
                            >
                          </li>
                          <li>
                            <a href="profile-activity.html"
                              ><em class="icon ni ni-activity-alt"></em
                              ><span>Login Activity</span></a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <a href="{{url('user-logout')}}"
                              ><em class="icon ni ni-signout"></em
                              ><span>Sign out</span></a
                            >
                          </li>
                        </ul>
                      </div>
                    </div> --}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
