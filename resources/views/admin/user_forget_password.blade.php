<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pro-Returns Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{url('admin_file/img/svg/logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('admin_file/css/style.min.css')}}">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Congrats!</h1>
    <p class="sign-up__subtitle">Fill Form to change password</p>
    <form class="sign-up-form form" action="" method="post">
        @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" name="email" type="email" placeholder="Enter your email" value="{{$email}}" editable="false" disabled required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" name="password" type="password" placeholder="Enter New password" required>
      </label>
      {{-- <a class="link-info forget-link" href="##">Forgot your password?</a> --}}
      <label class="form-checkbox-wrapper">
          @isset($error)
              <div>{{$error}}</div>
          @endisset
        {{-- <input class="form-checkbox" type="checkbox" required> --}}
        {{-- <span class="form-checkbox-label">Remember me next time</span> --}}
      </label>
      <button class="form-btn primary-default-btn transparent-btn">Update</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="{{url('admin_file/plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{url('admin_file/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{url('admin_file/js/script.js')}}"></script>
</body>

</html>
