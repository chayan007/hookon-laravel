//splash screen
$("load", function(){
   console.log("Loaded");
   $(".splash").fadeOut();
});

//mobile button in navbar in public pages
$(document).ready(function(){
  if($(window).width()>760){
      $('.mob-button').css('display','none');
      $('.fullscreen-dropdown').css('display','block');
  }else{
      $('.mob-button').css('display','block');
      $('.fullscreen-dropdown').css('display','none');
  }
});
// Owl carousel
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

$("#moreBtn1").on('click',function(){
    $("#popular-internships .owl-carousel").trigger('next.owl');
 })
 $("#moreBtn2").on('click',function(){
    $("#popular-courses .owl-carousel").trigger('next.owl');
 })

 // End of OWl carousel scripts
