@extends('layouts.app')
@section('page_name','Internship details')
@section('content')

<section id="background-section" style="background-color: #D84F57;"></section>

<section style="background-color: #fff;" >
    <div class="container">
        <div class="col-md-12 pb-4">
           <div class="row" style="height: 7vh;">
                <img class="company-main-logo ml-auto mr-auto" src="{{$internship->logo_url}}">
            </div>
            <h5 class="text-center">{{$internship->company}}</h5>
            <h6 class="text-center">{{$internship->location}}</h6><br/>
            <h3 class="text-center">{{$internship->profile}} Internship</h3>


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
                    <span style="font-size: 1.1rem;"> {{$internship->location}}</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> {{$internship->stipend}}</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> {{$internship->duration}} months</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> Internship start date</span>
                    <br/><br/>
                    <span style="font-size: 1.1rem;"> {{$internship->skills}}</span>
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
                <p class="text-justify mb-0">{{$internship->about}}</p>
             </div>
          </div>

        </div>
</section>

<section class="">
   <div class="container" style="background-color: #fff;">

         <div class="pt-4">
            <div class="col-md-12">
                <h5>Description of the job:</h5>
                <p class="text-justify mb-0">{{$internship->desc}}</p>
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
