<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>{{$title}}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">


  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">

  <script src="assets/js/chart-master/Chart.js"></script>
</head>

<body>

  <section id="container">
    <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('items.header')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('items.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      @yield('content')
    </section>
    <!--main content end-->
    <!--footer start-->
    <!--footer end-->
  </section>
  @include('items.footer')

</body>