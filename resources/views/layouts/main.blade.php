<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
      <meta name="description" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
      <title>{{$title}}</title>
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}"/>
      <!-- Icofont Icon-->
      <link href="{{asset('vendor/icons/icofont.min.css')}}" rel="stylesheet" type="text/css">
      <!-- Bootstrap core CSS -->
      <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <!-- Sidebar CSS -->
      <link href="{{asset('vendor/sidebar/demo.css')}}" rel="stylesheet">
      <!--jquery 1.8.3-->
      <script src="https://code.jquery.com/jquery-1.8.3.min.js" integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script>
       <script>
           var jq183 = jQuery.noConflict();
       </script>
      <!--jquery 3.5.1-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
       <script>
           var jq351 = jQuery.noConflict();
       </script>
       <!-- Font Awesome CSS -->
      <link rel='stylesheet' id='font-awesome-official-css' href='https://use.fontawesome.com/releases/v5.12.0/css/all.css' type='text/css' media='all' integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous" />
      <link rel='stylesheet' id='font-awesome-official-v4shim-css' href='https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css' type='text/css' media='all' integrity="sha384-AL44/7DEVqkvY9j8IjGLGZgFmHAjuHa+2RIWKxDliMNIfSs9g14/BRpYwHrWQgz6" crossorigin="anonymous" />
       <style>

           @media only screen and (min-width: 180px){
               .special_offer_slider{
                   height:100px;
               }

               
               .product_custom_image{
                   height:200px;
               }
               
               .modal-cus{
                   width: 100% !important;
               }
               
               .modal-dialog-cus{
                   max-width: 100% !important;
               }
           }

           @media only screen and (min-width: 380px){
               .special_offer_slider{
                   height:150px;
               }


               .product_custom_image{
                   height:180px;
               }
               
               .modal-cus{
                   width: 100% !important;
               }
               
               .modal-dialog-cus{
                   max-width: 100% !important;
               }
           }

           @media only screen and (min-width: 480px){
               .special_offer_slider{
                   height:230px;
               }

               .product_custom_image{
                   height:250px;
               }
               
               .modal-cus{
                   width: 100% !important;
               }
               
               .modal-dialog-cus{
                   max-width: 100% !important;
               }
               
           }

           @media only screen and (min-width: 768px){
               .special_offer_slider{
                   height:350px;
               }

               
               .product_custom_image{
                   height:300px;
               }
               
               .modal-cus{
                   width: 400px !important;
               }
               
               .modal-dialog-cus{
                   max-width: 400px !important;
               }
           }

           @media only screen and (min-width: 1024px){
               .special_offer_slider{
                   height:400px;
               }


               .product_custom_image{
                   height:300px;
               }
               
               .modal-cus{
                   width: 400px !important;
               }
               
               .modal-dialog-cus{
                   max-width: 400px !important;
               }
           }

       </style>
 
   </head>
   <body class="fixed-bottom-padding">

      @yield('content')

      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
      <!-- Sidebar JS-->
      <script type="text/javascript" src="{{asset('vendor/sidebar/hc-offcanvas-nav.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('js/osahan.js')}}"></script>
      
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
   </body>
</html>
