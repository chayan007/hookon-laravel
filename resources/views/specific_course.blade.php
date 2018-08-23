@extends('layouts.app')


@section('content')

  <section class="menu cid-qQriDdF7cR" once="menu" id="menu1-e" >



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




<section id="background-section" style="background-color: #D84F57;height: 30vh;"></section>

<section style="background-color: #fff;" >
    <div class="container">
        <div class="col-md-12 ">
           <div class="row" style="height: 7vh;">
                <img class="company-main-logo ml-auto mr-auto" src="assets/ExtraAssets/company_placeholder_logo.png">
            </div>
            <h5 class="text-center">Company Name</h5>
            <h6 class="text-center">company@company.com</h6>
            <h6 class="text-center">Bangalore, Karnataka</h6><br/>
            <h3 class="text-center">A.I crash course</h3>


            <br/>
            <div class="row">
                <div class="col-5 col-md-2">
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Location:</span><br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Duration:</span><br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Start date:</span>
                    <br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Prerequisites:</span><br/><br/>
                </div>
                <div class="col-7">
                    <span style="font-size: 1.1rem;"> _training_location_</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> _training_duration_</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> _training_start_date_</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> _training_prereq_</span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=" pt-3" style="border-top: 2px solid #D95058;">
    <div class="container" style="background-color: #fff;">


            <div class="col-md-12 pt-4 pb-3">
                <h5>About the company:</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in dictum mi, ut sollicitudin est. Vestibulum ac ultricies dui. Donec nec tempor dui. Etiam consectetur eget justo at commodo. Sed finibus lorem rhoncus magna vulputate, eget tempus ex convallis. Integer nec risus quam. Nulla egestas ex libero, non condimentum sapien sollicitudin at. Morbi vitae massa fringilla, imperdiet ipsum a, commodo elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel facilisis mauris. Cras rhoncus faucibus mi, eget venenatis felis imperdiet maximus. Duis id porta erat.</p>
                <p class="text-justify">Sed felis leo, volutpat sed massa ac, luctus maximus orci. Vestibulum enim ipsum, euismod eu gravida ut, cursus nec velit. Praesent tincidunt nisl suscipit consequat cursus. Vivamus in sem porttitor, ultricies ante sit amet, faucibus erat. Vivamus sed libero neque. Cras eu convallis purus. Praesent sed facilisis est. Suspendisse aliquam, tellus eu dapibus iaculis, lorem eros ultrices neque, vel eleifend justo odio eu nunc. Suspendisse ornare, lacus a finibus egestas, magna elit feugiat lacus, ultricies sollicitudin nibh tortor eu lorem. Suspendisse sed sollicitudin turpis, ac venenatis turpis.</p>
             </div>


        </div>
</section>

<section>
   <div class="container mt-0" style="background-color: #fff;">

         <div class="pt-4">



                        <div class="row">
                          @if(Auth::user())
                             <input type="button" class="btn btn-primary col-md-3 ml-auto mr-auto col-10 font-weight-bold mb-5" value="I'm interested" name="submit" target="_blank" data-toggle="modal" data-target="#ModalCenter" >
                          @endif
                        </div>

          </div>

        </div>
</section>

<!--Form Modal -->
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">

                <h2>Enter the details below</h2>
                <hr/>
                <form action="/action_page.php">
                     <div class="form-group">
                       <label >Name:</label>
                       <input type="email" class="form-control" value='testName' readonly >
                     </div>
                     <div class="form-group">
                       <label >Email:</label>
                       <input type="email" class="form-control" value='testEmail' readonly>
                     </div>
                     <div class="form-group">
                       <label >Phone:</label>
                       <input type="text" class="form-control" >
                     </div>
                     <div class="form-group">
                       <label >Location:</label>
                       <input type="text" class="form-control" >
                     </div>
                     <div class="form-group form-check">
                         <label class="form-check-label">
                           <input class="form-check-input" type="checkbox"> Allow for virtual
                         </label>
                       </div>
                     <div class="form-group">
                       <label >Comments:</label>
                         <textarea type="text" class="form-control"  style="height:5rem;"></textarea>
                     </div>
                     <div class="row">
                        <button type="submit" class="btn btn-primary mx-auto">Apply</button>
                     </div>

                 </form>



              </div>
            </div>
          </div>
        </div>
<!----Form end--------->








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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>
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
          b.style.backgroundColor = "#d95058";
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
          b.style.backgroundColor = "#d95058";
          b.style.padding = "0.5rem";
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
