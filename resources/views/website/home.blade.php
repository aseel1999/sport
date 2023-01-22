<!doctype html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Yammk</title>



  <!--Css Files -->

  <link rel="stylesheet" href="{{url('web/css/bootstrap.min.css')}}" >

  <link rel="stylesheet" href="{{url('web/css/font-awesome.min.css')}}" >

  <link rel="stylesheet" href="{{url('web/css/material-design-iconic-font.min.css')}}" >

  <link rel="stylesheet" href="{{url('web/css/animate.css')}}" />

  <link rel="stylesheet" href="{{url('web/css/custom-bootstrap-margin-padding.css')}}" />

  <link rel="stylesheet" href="{{url('web/css/style.css')}}" >

    <link rel="shortcut icon" href="{{url('favicon.png')}}" />


  <!--FavIcone -->


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="{{url('web/js/html5shiv.min.js')}}"></script>

      <script src="{{url('web/js/respond.min.js')}}"></script>

  <![endif]-->

  <style type="text/css">

    .colordech {

      color: #ffffff !important;

      padding: 20px;

      border-radius: 10px;

      font-family: m-b;

      background: #2d2d2d8c;

    }

  </style>

</head>

<body>



<!-- Start Page Section -->



  <section class="page-section text-center">

    <div class="overlay">

    <div class="container">

      <div class="box-content">

        <div class="icon">

          <img src="{{url('favicon.png')}}" alt="" height="150px">

        </div>

        <div class="discreption">

          <h3 class="mt-50 mb-20 colordech">Yammk</h3>

        </div>

        <div class="discreption">

          <h5 class="mt-50 mb-20 colordech">Yammk</h5>

        </div>

        <div class="row justify-content-center">

          <div class="col text-lg-right mb-20">

            <a href="{{$setting->app_store_url}}" target="_blank">

              <img class="ios-img" src="{{url('web/image/ios.png')}}" alt="">

            </a>

          </div>

          <div class="col text-lg-left">

            <a href="{{$setting->google_play_url}}" target="_blank">

              <img class="android-img" src="{{url('web/image/android.png')}}" alt="">

            </a>

          </div>

        </div>
  <div class="mt-50 mb-20 colordech"> {{date("Y").'&copy; Powered By'}}
            <a target="_blank" href="http://hexacit.com/">{{'HEXA'}}</a>
      </div>

    </div>

  </div>
</div>

</section>

<!-- End Page Section -->



<!--JavaScript Files -->

<script src="{{url('web/js/jquery-3.2.1.js')}}"></script>

<script src="{{url('web/js/popper.min.js')}}"></script>

<script src="{{url('web/js/bootstrap.min.js')}}"></script>

<script src="{{url('web/js/wow.min.js')}}"></script>

<script> new WOW().init(); </script>

<script src="{{url('web/js/myjs.js')}}"></script>



</body>

</html>

