<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>RUKUN HOME CARE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Pio Tirta">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  {{-- <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

  <!-- Libraries CSS Files -->
  
  {{-- <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">	 --}}				

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  {{-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script> --}}

  @yield('head')
  
</head>

<body>  
  
  @include('partials.header')

  @yield('banners')

  @yield('content')

  {{-- @yield('sidebar') --}}

  {{-- @include('partials.footer') --}}

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  
  {{-- <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/style.js') }}"></script>


  @yield('scripts')

  <script type="text/javascript">
    const currentLocation = location.href;
    const nav = document.getElementById('nav-menu-container');
    const menuLi = nav.querySelectorAll('li')
    const menuItem = nav.querySelectorAll('a');
    const menuLength = menuItem.length;
    for (let i =0; i < menuLength; i++) {
      if(menuItem[i].href === currentLocation) {
        menuLi[i].className = "menu-active"
      }
    }
    
  </script>
  {{-- <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>
    <script>
      function myFunction2() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script> --}}

  

</body>

</html>
