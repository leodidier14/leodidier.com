<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
        <link rel="icon" type="image/png" href="https://pbs.twimg.com/profile_images/483540263659241472/sd02mPsS_400x400.png" />
        <title>Léo DIDIER</title>  
    </head>
    </head>
    <body>

       

        
        @yield('content')

        <!-- Footer -->
<footer id="white" class="page-footer font-small mdb-color pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <strong>© BDE Strasbourg 2019</strong>
       
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr-fr.facebook.com/cesistrasbourg/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.youtube.com/user/groupecesi1/">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.linkedin.com/company/groupe-cesi/">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/GroupeCESI">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/campus_cesi/">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://fr.viadeo.com/fr/company/cesi">
              <i class="fab fa-viadeo"></i>
            </a>
          </li>
          
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
                 
    </body>
</footer>
<!-- Footer -->
        
</html>

