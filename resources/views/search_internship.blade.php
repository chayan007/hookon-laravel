
@extends('layouts.app')


@section('content')

  <section class="menu cid-qYhiUg3wEL" once="menu" id="menu1-10">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background-color:#fafafa;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
              <span style="background:black;"></span>
              <span style="background:black;"></span>
              <span style="background:black;"></span>
              <span style="background:black;"></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                         <img src="{{ asset('assets/ExtraAssets/hookon.png') }}" alt="Hookon" style="height: 4.4rem;">
                    </a>
                </span>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                  <a class="link display-4" style="color:black;" href=""><span class="mbri-target mbr-iconfont mbr-iconfont-btn"></span>Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link display-4" style="color:black;" href=""><span class="mbri-briefcase mbr-iconfont mbr-iconfont-btn"></span>Recruiters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link display-4" style="color:black;" href=""><span class="mbri-devices mbr-iconfont mbr-iconfont-btn"></span>Courses</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link link display-4" style="color:black;" href=""><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Search &nbsp;</a>
              </li>
          </ul>

            <div class="dropdown show">
              <a class="btn btn-primary dropdown-toggle display-4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/student/login">Student Login</a>
                <a class="dropdown-item" href="/recruiter/login">Recruiter Login</a>
              </div>
            </div>

            <div class="dropdown show">
              <a class="btn btn-primary dropdown-toggle display-4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/student/register">Student Register</a>
                <a class="dropdown-item" href="/recruiter/register">Recruiter Register</a>
              </div>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.me/c">site builder</a></section><section class="mbr-section form3 cid-qYhiUhftNR" id="form3-11">





    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">SEARCH INTERNSHIPS</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Search from the varied internships from different mentors</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <form class="mbr-form" action="" method="">
               <div class="col-12">
                   <div class="row">
                               <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Search by Skills</label>
                                        <input type="text" class="form-control" name="" id="skills" autocomplete="off" aria-describedby="helpId" aria-label="Large" placeholder="I want Internships for ....">
                                        <!--<div id="s_result" style="z-index:1000;background-color:white;">Soemthing</div>-->
                                        <div id="display"></div>
                                        <small id="helpId" class="form-text text-muted">Enter the domain of Internship</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Search by Location</label>
                                        <input type="text" class="form-control" name="" id="location" autocomplete="off" aria-describedby="helpId" aria-label="Large" placeholder="I want Internships at .....">
                                        <small id="helpId" class="form-text text-muted">Enter the location of Internship</small>
                                    </div>
                                </div>
                                <span class="input-group-btn justify-content-center ml-auto mr-auto" >
                                    <button href="" type="submit" class="btn btn-primary display-4">
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
       <div class="row">

        @foreach($view_internship as $view_internship)
         <div class="p-3 col-12 col-lg-4 ">
             <div class="pb-3 pt-3" style="background-color: #fff;">
                <div class="row">
                     <img src="{{asset($view_internship->logo_url)}}" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                </div>


             </div>
             <div class="card-box p-3" >
                 <h4 class="card-title py-3 mbr-fonts-style display-7">
                     Company: {{$view_internship->company}}
                 </h4>
                 <p class="card-title mbr-text mbr-fonts-style display-7">
                     Profile: {{$view_internship->profile}}
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-6">
                     Location: {{$view_internship->location}}
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-7">
                     Duration: {{$view_internship->duration}}
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-7">
                    No of Stipends: {{$view_internship->stipend}}
                 </p>
                 <p class="mbr-text-intenship mbr-fonts-style display-7">
                     Starts from : 12/12/18
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

            <div class="p-3 col-12 col-lg-4 ">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="row">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                   </div>


                </div>
                <div class="card-box p-3" >
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        _Company Name_
                    </h4>
                    <p class="card-title mbr-text mbr-fonts-style display-7">
                       _Internship Profile_
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-6">
                        Location :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Duration :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Stipend :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Starts from :
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

            <div class="p-3 col-12 col-lg-4 ">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="row">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                   </div>


                </div>
                <div class="card-box p-3">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        _Company Name_
                    </h4>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                       _Internship Profile_
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-6">
                        Location :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Duration :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Stipend :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Starts from :
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


            <div class="p-3 col-12 col-lg-4 ">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="row">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                   </div>


                </div>
                <div class="card-box p-3">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        _Company Name_
                    </h4>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                       _Internship Profile_
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-6">
                        Location :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Duration :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Stipend :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Starts from :
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

             <div class="cards p-3 col-12 col-lg-4 ">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="row">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                   </div>


                </div>
                <div class="card-box p-3">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        _Company Name_
                    </h4>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                       _Internship Profile_
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-6">
                        Location :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Duration :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Stipend :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Starts from :
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

             <div class="cards p-3 col-12 col-lg-4 ">
                <div class="pb-3 pt-3" style="background-color: #fff;">
                   <div class="row">
                        <img src="assets/ExtraAssets/comapny-placeholder.png" class="search-images" class="search-cards-style" style="margin: 0 auto;height: 120px;width: 120px; border-radius: 50%;border: 5px solid #D84F57">
                   </div>


                </div>
                <div class="card-box p-3">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        _Company Name_
                    </h4>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                       _Internship Profile_
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-6">
                        Location :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Duration :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Stipend :
                    </p>
                    <p class="mbr-text-intenship mbr-fonts-style display-7">
                        Starts from :
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

            </div>

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
                for(var i=0;i<data.length;i++){
                  $("#display").html(data[i]['category_name']).show();
                  //autocomp_skills(document.getElementById("skills"), data);
                  /*for(var i=0;i<data.length;i++){
                    $("#display").click( function(){
                      inp.value = data[i]['category_name'];
                    });
                  }*/

                  $("#display").html("<br/>")
                }
                console.log("skills is "+data);
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
function autocomp_skills(inp,data){
  inp.addEventListener("input", function(){
     var outerDiv,innerDiv,i;

     close();

     if(inp!==null){
        outerDiv = document.createElement("DIV");

        outerDiv.setAttribute("class", "autocomplete-items");

        this.parentNode.appendChild(outerDiv);

        for(i=0;i<data.length;i++){
          innerDiv = document.createElement("DIV");
          innerDiv.innerHTML = "<strong>"+data[i]['category_name']+"</strong>"
          innerDiv.addEventListener("click", function(i){
            inp.value = data[0]['category_name'];
            close();
          });
          outerDiv.appendChild(innerDiv);
        }

     }
  });
}

function close(elmnt) {
  /*close all autocomplete lists in the document,
  except the one passed as an argument:*/
  var x = document.getElementsByClassName("autocomplete-items");
  for (var i = 0; i < x.length; i++) {
    if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
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
          b.style.cursor = "pointer";
          b.style.padding = "0.5rem";
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
          b.style.cursor = "pointer";          b.style.padding = "0.5rem";
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
