
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPA App</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{  asset('assets/css/ionicons.css') }}">
  <link rel="stylesheet" href="{{  asset('assets/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.skin.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .fade-enter {
      opacity: 0;
    }
    .fade-enter-active {
      transition: opacity .3s ease;
    }
    .fade-leave {}

    .fade-leave-active {
      transition: opacity .3s ease;
      opacity: 0;
    }
  </style>
</head>
<body class="hold-transition">
<div id="app">
  <app></app>
</div>
<script src={{ asset('js/app.js') }}></script>
<script src="{{  asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js')  }}"></script>
<script src="{{ asset('assets/js/jquery.datatables.js')  }}"></script>
<script src="{{ asset('assets/js/jquery.datatables.bootstrap.js')  }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
</body>
</html>
