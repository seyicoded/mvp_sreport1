@extends('new-user.layout.app')
@section('content')

<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
      <div class="nk-content-inner">
        <div class="nk-content-body">
          <div class="nk-block-head">
            <div class="nk-block-head-content">
              <div class="nk-block-head-sub"><span>My Profile</span></div>
              <h2 class="nk-block-title fw-normal">Account Info</h2>
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
              <a class="nav-link" href="profile.html">Personal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('profile-kyc')}}"
                >KYC<span class="d-none s-sm-inline">
                  KYC</span
                ></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('profile-notify')}}"
                >Notifications</a
              >
            </li>
          </ul>
          <div class="nk-block">
            <div class="nk-block-head">
              <div class="nk-block-head-content">
                <h5 class="nk-block-title">Personal Information</h5>
                <div class="nk-block-des">
                  <p>
                    Basic info, like your name and address, that you use
                    on Pro-Returns Platform.
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-bordered" onclick="window.location.href='{{url('/profile-kyc')}}'">
              <div class="nk-data data-list">
                <div
                  class="data-item"
                  data-toggle="modal"
                  data-target="#profile-edit"
                >
                  <div class="data-col">
                    <span class="data-label">Full Name</span
                    ><span class="data-value">{{$investor['data']->first_name}} {{$investor['data']->last_name}}</span>
                  </div>
                  <div class="data-col data-col-end">
                    <span class="data-more"
                      ><em class="icon ni ni-forward-ios"></em
                    ></span>
                  </div>
                </div>
                <div class="data-item">
                  <div class="data-col">
                    <span class="data-label">Email</span
                    ><span class="data-value">{{$investor['investor']->email}}</span>
                  </div>
                  <div class="data-col data-col-end">
                    <span class="data-more disable"
                      ><em class="icon ni ni-lock-alt"></em
                    ></span>
                  </div>
                </div>
                <div
                  class="data-item"
                  data-toggle="modal"
                  data-target="#profile-edit"
                >
                  <div class="data-col">
                    <span class="data-label">Phone Number</span
                    ><span class="data-value text-soft">{{$investor['data']->phone}}</span>
                  </div>
                  <div class="data-col data-col-end">
                    <span class="data-more"
                      ><em class="icon ni ni-forward-ios"></em
                    ></span>
                  </div>
                </div>
                <div
                  class="data-item"
                  data-toggle="modal"
                  data-target="#profile-edit"
                >
                  <div class="data-col">
                    <span class="data-label">Date of Birth</span
                    ><span class="data-value">{{$investor['data']->dob}}</span>
                  </div>
                  <div class="data-col data-col-end">
                    <span class="data-more"
                      ><em class="icon ni ni-forward-ios"></em
                    ></span>
                  </div>
                </div>
                <div
                  class="data-item"
                  data-toggle="modal"
                  data-target="#profile-edit"
                  data-tab-target="#address"
                >
                  <div class="data-col">
                    <span class="data-label">Address</span
                    ><span class="data-value"
                      >{{$investor['data']->address1}}</span
                    >
                  </div>
                  <div class="data-col data-col-end">
                    <span class="data-more"
                      ><em class="icon ni ni-forward-ios"></em
                    ></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="nk-block-head">
              <div class="nk-block-head-content">
                <h5 class="nk-block-title">Account Password</h5>
                <div class="nk-block-des">
                  <p>Need to change your account password, you can, now.</p>
                </div>
              </div>
            </div>
            <div class="card card-bordered">
              <div class="nk-data data-list">
                <form class="data-item" method="post">
                @csrf
                  <div class="data-col">
                    <span class="data-label"><input name="old_password" placeholder="old password" class="form-control w3-input" style="width: 100%" /></span>
                    <span class="data-value"><input name="new_password" placeholder="new password" class="form-control w3-input" style="width: 100%" /></span>
                  </div>
                  <div class="data-col data-col-end">
                    <button type="submit" style="background: none; border: none">
                      <span class="data-more"
                        ><em class="icon ni ni-forward-ios"></em
                      ></span>
                    </button>
                    
                  </div>
                </form>
              </div>
            </div>


            <div class="nk-block-head">
              <div class="nk-block-head-content">
                <h5 class="nk-block-title">Personal Preferences</h5>
                <div class="nk-block-des">
                  <p>Your personalized preference allows you best use.</p>
                </div>
              </div>
            </div>
            <div class="card card-bordered">
              <div class="nk-data data-list">
                <div class="data-item">
                  <div class="data-col">
                    <span class="data-label">Language</span>
                    <span class="data-value"
                      >English (United State)</span
                    >
                  </div>
                  <div class="data-col data-col-end">
                    {{-- <a
                      href="#"
                      data-toggle="modal"
                      data-target="#profile-language"
                      class="link link-primary"
                      >Change Language</a
                    > --}}
                  </div>
                </div>
                <div class="data-item">
                  <div class="data-col">
                    <span class="data-label">Date Format</span
                    ><span class="data-value">M d, YYYY</span>
                  </div>
                  <div class="data-col data-col-end">
                    {{-- <a
                      href="#"
                      data-toggle="modal"
                      data-target="#profile-language"
                      class="link link-primary"
                      >Change</a
                    > --}}
                  </div>
                </div>
                {{-- <div class="data-item">
                  <div class="data-col">
                    <span class="data-label">Timezone</span
                    ><span class="data-value">Bangladesh (GMT +6)</span>
                  </div>
                  <div class="data-col data-col-end">
                    <a
                      href="#"
                      data-toggle="modal"
                      data-target="#profile-language"
                      class="link link-primary"
                      >Change</a
                    >
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
