<!-- signin-area start -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bdr-radius">
        <div class="signin-wrapper">
          <div class="signin-wrapper-header text-center">
            <div class="logo"><img src="assets/images/elements/logo-icon.png" alt="image"></div>
            <h3 class="title">Login with</h3>
            <p>Welcome back, please sign in below</p>
          </div>
          <form class="signin-form" method="post" action="{{url('/sign-in')}}">
            @csrf
            <div class="form-group">
              <label for="signinEmail">Email*</label>
              <input type="email" class="form-control" id="signinEmail" name="email" placeholder="Enter your Email">
            </div>
            <div class="form-group">
              <label for="signinPass">Password*</label>
              <input type="password" class="form-control" id="signinPass" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="custom-checkbox">
                <input type="checkbox" name="id-1" id="id-1" checked>
                <label for="id-1">Remember Password</label>
                <span class="checkbox"></span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-hover">Log In</button>
          </form>
          <div class="signin-wrapper-footer">
            <p class="bottom-text">Don’t have an account? <a href="#0" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign Up Now</a></p>
            <br />
            <p class="bottom-text"><a href="#0" data-toggle="modal" data-target="#forgEtModal" data-dismiss="modal" aria-label="Close">Forgot Password</a></p>
            <br />
            <br />
            {{-- <div class="divider"><span>or</span></div>
            <ul class="social-list">
              <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- signin-area end -->

  <!-- signup-area start -->
  <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bdr-radius">
        <div class="signin-wrapper">
          <div class="signin-wrapper-header text-center">
            <div class="logo"><img src="assets/images/elements/logo-icon.png" alt="image"></div>
            <h3 class="title">SIGN UP</h3>
          </div>
          <form class="signin-form" method="post" action="{{url('/sign-up')}}">
            @csrf
            <div style="display: flex; ">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text"
                      class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Full Name">
                    <small id="name" class="form-text text-muted">Full Name</small>
                  </div> &nbsp;
                  <div class="form-group">
                    <label for="signinEmail">Email*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                </div>
            </div>

            <div style="display: flex; ">
                <div class="form-group">
                    <label for="signinPass">Password*</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                  &nbsp;
                  <div class="form-group">
                    <label for="signinPass">Confirm Password*</label>
                    <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Password">
                  </div>
            </div>

            <div class="form-group">
              <label for="currency"></label>
              <?php
                $list = DB::select('SELECT * from app_currency where status = ?', [1]);
              ?>
              <select class="custom-select" name="currency" id="currency">
                  @foreach ($list as $l)
                    <option value="{{$l->currency}}" {{ ($l->currency == 'USD') ? 'selected':''}}>{{$l->currency}}</option>
                  @endforeach

              </select>
            </div>
            {{-- <div class="form-group">
              <div class="custom-checkbox">
                <input type="checkbox" name="id-2" id="id-2" checked>
                <label for="id-2">I do not want to be kept up to date about relevant investment opportunities, features, and events</label>
                <span class="checkbox"></span>
              </div>
            </div> --}}
            <button type="submit" class="btn btn-primary btn-hover">SIGN UP</button>
          </form>
          <div class="signin-wrapper-footer">
            <p class="bottom-text">Already have an account?<a href="#0" data-toggle="modal" data-target="#signInModal" data-dismiss="modal" aria-label="Close">Login</a></p>
            <br />
            <br />
            <br />
            &nbsp;
            {{-- <div class="divider"><span>or</span></div>
            <ul class="social-list">
              <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- signup-area end -->

  <!-- signup-area start -->
  <div class="modal fade" id="forgEtModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bdr-radius">
        <div class="signin-wrapper">
          <div class="signin-wrapper-header text-center">
            <div class="logo"><img src="assets/images/elements/logo-icon.png" alt="image"></div>
            <h3 class="title">Forget Password</h3>
          </div>
          <form class="signin-form" method="get" onsubmit="return false" action="{{url('/forget')}}">
            @csrf
            <div style="">
                &nbsp;
                  <div class="form-group">
                    <label for="signinEmail">Email*</label>
                    <input type="email" class="form-control" style="width: 100%" name="email" id="reset_email" placeholder="Enter your Email">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-hover" onclick="send_request()" id='reset_button'>Request Reset</button>
          </form>
          <div class="signin-wrapper-footer">
            <p class="bottom-text">Already have an account?<a href="#0" data-toggle="modal" data-target="#signInModal" data-dismiss="modal" aria-label="Close">Login</a></p>
            <br />
            <br />
            <br />
            &nbsp;
            {{-- <div class="divider"><span>or</span></div>
            <ul class="social-list">
              <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const send_request = ()=>{
      const email = $('#reset_email').val();
      const button = $('#reset_button');

      button.html('requesting, please wait....');

      $.get('{{url('reset-password')}}', {email: email}, function(data){
        console.log(data)
        if(data == true || data== 'true'){
          button.html('Reset Link sent to your mail')
        }else{
          button.html('Account not found')
        }
        
      })
    }
  </script>
  <!-- signup-area end -->
