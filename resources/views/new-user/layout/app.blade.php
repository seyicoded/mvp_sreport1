<!DOCTYPE html>
<html lang="zxx" class="js">
  <meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  />
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."
    />
    <link rel="stylesheet" href="{{url('css/w3.css')}}">
    <link
      rel="shortcut icon"
      href="https://dashlite.net/demo6/images/favicon.png"
    />
    <title>Portal: Pro-Returns</title>
    {{-- <link
      rel="stylesheet"
      href="https://dashlite.net/demo6/assets/css/dashlite.css?ver=2.9.1"
    /> --}}
    {{-- <link
      id="skin-default"
      rel="stylesheet"
      href="https://dashlite.net/demo6/assets/css/theme.css?ver=2.9.1"
    /> --}}
    {{-- http://120.77.156.5:9090/libs/assets/css/dashlite.css?ver=2.2.0 --}}
    {{-- <link
      id="skin-default"
      rel="stylesheet"
      href="http://120.77.156.5:9090/libs/assets/css/dashlite.css?ver=2.2.0"
    /> --}}
    <link
      id="skin-default"
      rel="stylesheet"
      href="{{url('css/dashlite.css')}}"
    />
    <link
      id="skin-default"
      rel="stylesheet"
      href="http://120.77.156.5:9090/libs/assets/css/theme.css?ver=2.2.0"
    />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];function gtag() {dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-91615293-4');
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/621f81f2a34c24564129137d/1ft5h77e4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </head>
  <body class="nk-body npc-invest bg-lighter">
    <div class="nk-app-root">
      <div class="nk-wrap">

        {{-- header start --}}
        @include('new-user.layout.heder')
        {{-- header ends --}}

        {{-- content start --}}
        @yield('content')
        {{-- content end --}}

        {{-- footer start --}}
        @include('new-user.layout.footer')
        {{-- footer end --}}
      </div>
    </div>

    <script data-cfasync="false" src="https://pixner.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script src="https://dashlite.net/demo6/assets/js/bundle.js?ver=2.9.1"></script> --}}
    {{-- <script src="https://dashlite.net/demo6/assets/js/scripts.js?ver=2.9.1"></script> --}}
    <script src="http://120.77.156.5:9090/libs/assets/js/bundle.js?ver=2.2.0"></script>
    <script src="http://120.77.156.5:9090/libs/assets/js/scripts.js?ver=2.2.0"></script>

    <script src="https://dashlite.net/demo6/assets/js/demo-settings.js?ver=2.9.1"></script>
    <script src="https://dashlite.net/demo6/assets/js/charts/chart-invest.js?ver=2.9.1"></script>
    
  </body>
  
</html>
