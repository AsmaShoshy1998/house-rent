<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>House Rent</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
 
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('/frontend/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('/frontend/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  
@include('frontend.partials.header')
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->        

@yield('slider')
                  
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  

@yield('contents')



  <!--/ Testimonials End /-->

  <!--/ footer Star /-->
  

  @include('frontend.partials.footer')
  
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{url('/frontend/js/jquery.min.js')}}"></script>
  <script src="{{url('/frontend/js/jquery-migrate.min.js')}}"></script>
  <script src="{{url('/frontend/js/popper.min.js')}}"></script>
  <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{url('/frontend/js/easing.min.js')}}"></script>
  <script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('/frontend/js/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('/frontend/js/contactform.js')}}"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('/frontend/js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
