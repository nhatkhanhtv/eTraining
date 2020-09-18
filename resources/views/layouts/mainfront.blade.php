<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Varsity | Home</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

        <!-- Font awesome -->
        <link href="/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="/css/bootstrap.css" rel="stylesheet">   
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="/css/slick.css">          
        <!-- Fancybox slider -->
        <link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css" media="screen" /> 
        <!-- Theme color -->
        <link id="switcher" href="/css/theme-color/default-theme.css" rel="stylesheet">          

        <!-- Main style sheet -->
        <link href="/css/style.css" rel="stylesheet">    

    
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="antialiased">
        <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
@section('name')
@stop
 @include('layouts.header')
  <!-- End header  -->
 @include('layouts.menu')
  <!-- Start search box -->
 @include('layouts.searchbox') 
  <!-- End search box -->
  <!-- Start Slider -->
@include('layouts.slider')
  <!-- End Slider -->
  <!-- Start service  -->
  <!-- Start from blog -->
@yield('content')
  <!-- End from blog -->

  <!-- Start footer -->
  @include('layouts.footer')
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="/js/waypoints.js"></script>
  <script type="text/javascript" src="/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="/js/custom.js"></script> 
    </body>
</html>
