<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{url('template_admin/images/fevicon.png')}}" type="{{url('template_admin/image/png')}}" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('template_admin/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{url('template_admin/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{url('template_admin/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{url('template_admin/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{url('template_admin/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{url('template_admin/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{url('template_admin/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
   @yield('content')
     
      <!-- jQuery -->
      <script src="{{url('template_admin/js/jquery.min.js')}}"></script>
      <script src="{{url('template_admin/js/popper.min.js')}}"></script>
      <script src="{{url('template_admin/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{url('template_admin/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{url('template_admin/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{url('template_admin/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{url('template_admin/js/Chart.min.js')}}"></script>
      <script src="{{url ('template_admin/js/Chart.bundle.min.js')}}"></script>
      <script src="{{url ('template_admin/js/utils.js')}}"></script>
      <script src="{{url ('template_admin/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{url ('template_admin/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{url('template_admin/js/custom.js')}}"></script>
      <script src="{{url('template_admin/js/chart_custom_style1.js')}}"></script>
   </body>
</html>