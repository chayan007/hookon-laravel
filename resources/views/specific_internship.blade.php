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




<section id="background-section" style="background-color: #D84F57;"></section>

<section style="background-color: #fff;" >
    <div class="container">
        <div class="col-md-12 pb-4">
           <div class="row" style="height: 7vh;">
                <img class="company-main-logo ml-auto mr-auto" src="assets/ExtraAssets/company_placeholder_logo.png">
            </div>
            <h5 class="text-center">Company Name</h5>
            <h6 class="text-center">company@company.com</h6>
            <h6 class="text-center">Bangalore, Karnataka</h6><br/>
            <h3 class="text-center">Web Developer Internship</h3>


            <br/>
            <div class="row">
                <div class="col-5 col-md-2">
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Location:</span><br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Stipend:</span><br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Duration:</span><br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Start date:</span>
                    <br/><br/>
                    <span  style="font-size: 1.1rem;color: #bfbfbf;">Required Skills:</span>
                </div>
                <div class="col-7">
                    <span style="font-size: 1.1rem;"> Internship_location</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> Internship_stipend</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> Internship_duration</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> Internship start date</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> PHP, Java, JS , HTML , CSS, Adobe Photoshop</span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pt-3" style="border-top: 2px solid #D95058;">
    <div class="container" style="background-color: #fff;">

         <div class="pt-4">
            <div class="col-md-12">
                <h5>About the company:</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in dictum mi, ut sollicitudin est. Vestibulum ac ultricies dui. Donec nec tempor dui. Etiam consectetur eget justo at commodo. Sed finibus lorem rhoncus magna vulputate, eget tempus ex convallis. Integer nec risus quam. Nulla egestas ex libero, non condimentum sapien sollicitudin at. Morbi vitae massa fringilla, imperdiet ipsum a, commodo elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel facilisis mauris. Cras rhoncus faucibus mi, eget venenatis felis imperdiet maximus. Duis id porta erat.</p>
                <p class="text-justify mb-0">Sed felis leo, volutpat sed massa ac, luctus maximus orci. Vestibulum enim ipsum, euismod eu gravida ut, cursus nec velit. Praesent tincidunt nisl suscipit consequat cursus. Vivamus in sem porttitor, ultricies ante sit amet, faucibus erat. Vivamus sed libero neque. Cras eu convallis purus. Praesent sed facilisis est. Suspendisse aliquam, tellus eu dapibus iaculis, lorem eros ultrices neque, vel eleifend justo odio eu nunc. Suspendisse ornare, lacus a finibus egestas, magna elit feugiat lacus, ultricies sollicitudin nibh tortor eu lorem. Suspendisse sed sollicitudin turpis, ac venenatis turpis.</p>
             </div>
          </div>

        </div>
</section>

<section class="">
   <div class="container" style="background-color: #fff;">

         <div class="pt-4">
            <div class="col-md-12">
                <h5>Description of the job:</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in dictum mi, ut sollicitudin est. Vestibulum ac ultricies dui. Donec nec tempor dui. Etiam consectetur eget justo at commodo. Sed finibus lorem rhoncus magna vulputate, eget tempus ex convallis. Integer nec risus quam. Nulla egestas ex libero, non condimentum sapien sollicitudin at. Morbi vitae massa fringilla, imperdiet ipsum a, commodo elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel facilisis mauris. Cras rhoncus faucibus mi, eget venenatis felis imperdiet maximus. Duis id porta erat.</p>
                <p class="text-justify mb-0">Sed felis leo, volutpat sed massa ac, luctus maximus orci. Vestibulum enim ipsum, euismod eu gravida ut, cursus nec velit. Praesent tincidunt nisl suscipit consequat cursus. Vivamus in sem porttitor, ultricies ante sit amet, faucibus erat. Vivamus sed libero neque. Cras eu convallis purus. Praesent sed facilisis est. Suspendisse aliquam, tellus eu dapibus iaculis, lorem eros ultrices neque, vel eleifend justo odio eu nunc. Suspendisse ornare, lacus a finibus egestas, magna elit feugiat lacus, ultricies sollicitudin nibh tortor eu lorem. Suspendisse sed sollicitudin turpis, ac venenatis turpis.</p>
             </div>
          </div>

        </div>
</section>

<section class="">
   <div class="container" style="background-color: #fff;">

         <div class="pt-4">
            <div class="col-md-4">
                <h5 class="pb-3">Eligibility Criteria:</h5>
                <ul class="text-left ml-auto mr-auto">
                  <li>Coffee</li>
                  <li>Tea</li>
                  <li>Milk</li>
                  <li>Something else that you need to find out</li>
                </ul>
                <h5 class="pb-3">No of internships available: 5</h5>

                <p><span class="h5 pb-5 pr-2">Perks:</span>Certificates, Letter of Recommendation, Free Lunch, 24/7 Free wifi</p>

             </div>

             <div class="container">
                <div class="row">
                  @if(Auth::user())
                     <input type="submit" class="btn btn-primary col-md-4 col-10 font-weight-bold mb-5 ml-auto mr-auto" value="Apply now" name="submit">
                  @endif
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

@endsection
