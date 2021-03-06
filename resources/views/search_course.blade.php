@extends('layouts.app')
@section('page_name','Search a Course | Hookon Internships')
@section('content')


<section class="mbr-section form3 cid-qYhiUhftNR" id="form3-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">SEARCH COURSES</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Search from the varied courses from different mentors</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <form class="mbr-form" action="/search_course" method="POST">
               <div class="col-12">
                   <div class="row">
                               <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Search by Skills</label>
                                        <input type="text" autocomplete="off" class="form-control" name="category" id="skills" aria-describedby="helpId" aria-label="Large" placeholder="I want courses for ....">
                                        <small id="helpId" class="form-text text-muted">Enter the domain of your course</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Search by Location</label>
                                        <input type="text" autocomplete="off" class="form-control" name="location" id="location" aria-describedby="helpId" aria-label="Large" placeholder="I want courses at .....">
                                        <small id="helpId" class="form-text text-muted">Enter the location of course</small>
                                    </div>
                                </div>
                                <span class="input-group-btn justify-content-center ml-auto mr-auto" >
                                    <button type="submit" class="btn btn-primary display-4">
                                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>SEARCH</button>
                                </span>
                   </div>
               </div>
            </form>
        </div>
    </div>
</section>

<section class="features6 cid-qYhjSdSJ7N" style="padding-top: 10px;">




    <div class="container">

       @foreach($view_course as $view_course)
            <div class="p-3 col-12 col-lg-8 mx-auto">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="float-right mr-5">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images img-fluid" style="margin: 0 auto; border-radius: 50%;border: 5px solid #D95058">
                   </div>
                </div>
                <div class="card-box p-3">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                          {{$view_course->course}}
                    </h4>
                    <p class=" mbr-text mbr-fonts-style display-5">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Kolkata
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-5">
                       <i class="fa fa-clock-o" aria-hidden="true"></i> 2 months
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-5">
                        Starts from: 12/12/18
                    </p>
                    <div class="buttonlist col-md-12 col-12 pt-4" >
                       <div class="row">
                            <a class="btn btn-primary ml-0 mr-2" style="width: 50%;" href="#" role="button">
                                Details
                            </a>
                            <a class="btn btn-primary ml-0 mr-0" style="width: 46.8%;" href="#" role="button">
                                Apply
                            </a>
                        </div>
                    </div>
                </div>
            </div>
         @endforeach

         <!--<div class="p-3 col-12 col-lg-8 mx-auto">
             <div class="pb-3 pt-3" style="background-color: #fff;">
                <div class="float-right mr-5">
                     <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images img-fluid" style="margin: 0 auto; border-radius: 50%;border: 5px solid #D95058">
                </div>
             </div>
             <div class="card-box p-3">
                 <h4 class="card-title py-3 mbr-fonts-style display-5">
                       Web 1
                 </h4>
                 <p class=" mbr-text mbr-fonts-style display-5">
                     <i class="fa fa-map-marker" aria-hidden="true"></i> Kolkata
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-5">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 2 months
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-5">
                     Starts from: 12/12/18
                 </p>
                 <div class="buttonlist col-md-12 col-12 pt-4" >
                    <div class="row">
                         <a class="btn btn-primary ml-0 mr-2" style="width: 50%;" href="#" role="button">
                             Details
                         </a>
                         <a class="btn btn-primary ml-0 mr-0" style="width: 46.8%;" href="#" role="button">
                             Apply
                         </a>
                     </div>
                 </div>
             </div>
         </div>

         <div class="p-3 col-12 col-lg-8 mx-auto">
             <div class="pb-3 pt-3" style="background-color: #fff;">
                <div class="float-right mr-5">
                     <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images img-fluid" style="margin: 0 auto; border-radius: 50%;border: 5px solid #D95058">
                </div>
             </div>
             <div class="card-box p-3">
                 <h4 class="card-title py-3 mbr-fonts-style display-5">
                       Web2
                 </h4>
                 <p class=" mbr-text mbr-fonts-style display-5">
                     <i class="fa fa-map-marker" aria-hidden="true"></i> Kolkata
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-5">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 2 months
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-5">
                     Starts from: 12/12/18
                 </p>
                 <div class="buttonlist col-md-12 col-12 pt-4" >
                    <div class="row">
                         <a class="btn btn-primary ml-0 mr-2" style="width: 50%;" href="#" role="button">
                             Details
                         </a>
                         <a class="btn btn-primary ml-0 mr-0" style="width: 46.8%;" href="#" role="button">
                             Apply
                         </a>
                     </div>
                 </div>
             </div>
         </div>-->

       </div>
</section>

<section once="" class="cid-qYhiUkpSEY" id="footer7-13">





    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Get In Touch</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">






                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2017 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$("#skills").on('keyup',function(){
      $value = $(this).val();
      console.log("val is "+$value);
      $.ajax({
              type: 'get',
              url: '{{URL::to('search_skills')}}',
              dataType: "json",
              data: {
                  'val' : $value,
              },
              success:function(data){
                autocomplete_skills(document.getElementById("skills"), data);
                console.log(data['category_name']);
              },
  });
});

$("#location").on('keyup',function(){
      $value = $(this).val();
      console.log("val is "+$value);
      $.ajax({
              type: 'get',
              url: '{{URL::to('search_location')}}',
              dataType: "json",
              data: {
                  'val' : $value,
              },
              success:function(data){
                autocomplete_location(document.getElementById("location"), data);
                console.log("loc is "+data['location_name']);
              },
  });
});

</script>
<script>
// Auto complete function starts
function autocomplete_skills(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        //if (arr[i][].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i]['category_name'].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i]['category_name'].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.style.position = "relative";
          b.style.zIndex = "1000";
          b.style.backgroundColor = "#efefef";
          b.style.padding = "0.5rem";
          b.style.cursor = "pointer";
          b.innerHTML += "<input type='hidden' value='" + arr[i]['category_name'] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        //}
      }
  });

  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

//   end of autocomplete function

//autocomplete(document.getElementById("search_by_skills"), jobs);
//autocomplete(document.getElementById("location"), locations);

</script>
<script>
// Auto complete function starts
function autocomplete_location(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        //if (arr[i][].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i]['location_name'].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i]['location_name'].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.style.position = "relative";
          b.style.zIndex = "1000";
          b.style.backgroundColor = "#efefef";
          b.style.padding = "0.5rem";
          b.style.cursor = "pointer";
          b.innerHTML += "<input type='hidden' value='" + arr[i]['location_name'] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        //}
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}
</script>

@endsection
