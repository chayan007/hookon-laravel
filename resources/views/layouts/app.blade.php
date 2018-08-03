
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/animatecss/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/as-pie-progress/css/progress.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/ExtraAssets/owl.carousel.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/ExtraAssets/owl.theme.default.min.css') }}">

</head>
<body>

  <!--<div class="splash" style="display:block;">
         <div class="splash-content">
             <h3>WELCOME TO</h3>
             <img src="{{ asset('assets/ExtraAssets/hookon.svg') }}" >
         </div>
     </div>-->  <!--end of splash screen-->

      @yield('content')

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="{{ asset('assets/ExtraAssets/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
      <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
      <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
      <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
      <script src="{{ asset('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
      <script src="{{ asset('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
      <script src="{{ asset('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
      <script src="{{ asset('assets/as-pie-progress/jquery-as-pie-progress.min.js') }}"></script>
      <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
      <script src="{{ asset('assets/mbr-clients-slider/mbr-clients-slider.js') }}"></script>
      <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
      <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>
      <script>

          $('#popular-internships .owl-carousel').owlCarousel({
                items: 2.5,
                  loop: true,
                  nav : false,
                  autoWidth: true,
                responsive:{
                    0:{
                     items:1.5,
                      margin: 10,
                   },
                  768:{
                   items:2.5,
                      margin:16

                  },
                  1000:{
                      items:3.5,
                      margin:16
                  },
                  1400:{
                      items: 6,
                      loop:false,
                      margin: 20,
                  }
              }
          });
            $('#popular-courses .owl-carousel').owlCarousel({
                items: 2.5,
                  loop: true,
                  nav : false,
                  autoWidth: true,
                responsive:{
                    0:{
                     items:1.5,
                      margin: 10,
                   },
                  768:{
                   items:2.5,
                      margin:16

                  },
                  1000:{
                      items:3.5,
                      margin:16
                  },
                  1400:{
                      items: 6,
                      loop:false,
                      margin: 20,
                  }
              }
          });
      </script>
      <script>
           $("#sponsor .owl-carousel").owlCarousel({
          items: 1,
          autoplay: true,
          margin: 10,
          loop:true,
          responsive:{
              0:{
                  items: 1,
                  dots:true
              },
              400:{
                  items: 2,
                  dots:true
              },
              1000:{
                  items: 3,
                  dots:true
              },
              1400:{
                  items: 4,
                  dots:true
              }
          }
      });
      $("#company-list .owl-carousel").owlCarousel({
          items: 4.5,
          loop: true,
          responsive:{
              0:{
                  items: 2.5,
              },
              400:{
                  items: 3.5,
                  margin:40,
              },
              1000:{
                  items: 5.5
              },
              1400:{
                  items: 6.6
              }
          }
      });

      </script>
      <script>
         $("#moreBtn1").on('click',function(){
             $("#popular-internships .owl-carousel").trigger('next.owl');
          })
          $("#moreBtn2").on('click',function(){
             $("#popular-courses .owl-carousel").trigger('next.owl');
          })
      </script>
      <script>
           $("load", function(){
              console.log("Loaded");
              $(".splash").fadeOut();
          });

      </script>
</body>
</html>
