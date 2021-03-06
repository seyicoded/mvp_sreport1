@extends('layout.app')
@section('content')
    <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="assets/images/inner-page-banner-illustrations/security.png" alt="image-illustration"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-page-content-area">
                    <h2 class="page-title">Funds Security</h2>
                    <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                            <li class="breadcrumb-item">Security</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->

  <!-- security-section start -->
  <section class="security-section pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="security-wrapper mt-minus">
            <div class="section-header text-center">
              <span class="section-subtitle">Our client's funds security is</span>
              <h2 class="section-title">Our Top Priority</h2>
              <p>With Behoof you can be absolutely sure your deposits are secured in every possible way.Here are some of the measures we take to ensure funds protection: </p>
            </div>
            <div class="security-single">
              <div class="thumb"><img src="assets/images/security/1.png" alt="image"></div>
              <div class="content">
                <span class="subtitle">personal area</span>
                <h2 class="title">SSL-Protected</h2>
                <p>We use highly secure technology to protect your personal data and financial  transactions. SSL-secured Personal Area is protected with 128-bit encryption, which makes your browsing safe and your data inaccessible to any third parties.</p>
                <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>
              </div>
            </div><!-- security-single end -->
            <div class="security-single">
              <div class="thumb"><img src="assets/images/security/2.png" alt="image"></div>
              <div class="content">
                <span class="subtitle">Two-step authentication</span>
                <h2 class="title">acct verification</h2>
                <p>behoof recommends you to verify your account by submitting your personal ID scan and an address proof. This simple measure will make sure your transactions are authorized and secured.</p>
                <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>
              </div>
            </div><!-- security-single end -->
            <div class="security-single">
              <div class="thumb"><img src="assets/images/security/3.png" alt="image"></div>
              <div class="content">
                <span class="subtitle">Safety and Security</span>
                <h2 class="title">Withdrawal Rules</h2>
                <p>Since a withdrawal from a live account requires an email confirmation, no one can ever access your account but yourself. It is also required that you use the same payment details for deposits and withdrawals. Thus, under no circumstances can behoof  transfer your withdrawal to an unauthorized third party.</p>
                <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>
              </div>
            </div><!-- security-single end -->
            <div class="security-single">
              <div class="thumb"><img src="assets/images/security/4.png" alt="image"></div>
              <div class="content">
                <span class="subtitle">authorization</span>
                <h2 class="title">3D secure Visa & Mastercard</h2>
                <p>behoof recommends you to verify your account by submitting your personal ID scan and an address proof. This simple measure will make sure your transactions are authorized and secured.</p>
                <a href="#0" class="btn btn-primary btn-hover text-small">read more</a>
              </div>
            </div><!-- security-single end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- security-section end -->
@endsection
