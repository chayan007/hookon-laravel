@extends('layouts.app')
@section('page_name','Homepage | Hookon Internships')
@section('content')

<div class="splash">
  <div class="splash-content">
    <img src="{{asset('assets/ExtraAssets/HOOKON_white.png')}}" height="50" />
    <h3>Loading..</h3>
  </div>
</div>

<section class="cid-qQriDf8GmN pb-1" style="background-color: #fff;">
   <div class="y" style="opacity: 0.3; background-color: rgb(35, 35, 35);"></div>
    <div class="container">
        <div class="row">
            <div class="mbr-white col-md-10 mb-5">
                <h3 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style" style="color: #000;">Connecting Talents and Companies</h3>
                <div class="mbr-section-btn">
                  <a class="btn btn-header-internships btn-white-outline" href="/search_internships" style="color:#000;border:1px solid #000;font-size:1.3rem;">
                    <div>
                      <img src="{{asset('assets/ExtraAssets/write-board.svg')}}" style="color:#fff;" height="35px" width="35px"/>
                      <br/>
                      <strong>Internships</strong>
                    </div>
                  </a>
                  <a class="btn btn-header-courses btn-white-outline" style="color:#000;border:1px solid #000;font-size:1.3rem;" href="/search_course">
                    <div>
                      <img src="{{asset('assets/ExtraAssets/resume.svg')}}" style="color:#fff;" height="35px" width="35px"/>
                      <br/>
                      <strong>Courses</strong>
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="features3 cid-qXwjcYsW1c" id="features3-x">




    <div class="container pt-3 ">
        <div class="row">
            <div class="container">
                <h3 class="ml-3 font-weight-bold float-left">Popular Internships</h3>
                 <a href="javascript:void(0);" id="moreBtn1" class="float-right font-weight-bold" style="color:#D84F57">More</a>

            </div>
            <br/><br/>
            <div id="popular-internships" class="container-fluid">
                <div class="owl-carousel ml-3">

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/132979/screenshots/2645966/5faz-illustration04.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center" >Web Development</h5>
                      </div>
                  </div>

                    <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/1307709/screenshots/2954502/mobile_seo.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Social Media Marketing</h5>
                      </div>
                  </div>

                  <div class="card">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/962009/screenshots/4064741/mobile_application_development_trends.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Android Development</h5>
                      </div>
                  </div>

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/962009/screenshots/4064741/mobile_application_development_trends.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Content writing</h5>
                      </div>
                  </div>

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/962009/screenshots/4064741/mobile_application_development_trends.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Graphic Design</h5>
                      </div>
                  </div>

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/962009/screenshots/4064741/mobile_application_development_trends.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Software Development</h5>
                      </div>
                  </div>

               </div>
            </div>

       </div>
    </div>
</section>

<!--<section class="progress-bars3 cid-qXzefyytyw" id="progress-bars3-l">




    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Hookon Hits</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            Mobirise has provided for website developers a growing library of modern blocks which can be used either partially or in full for every website developed through the builder.
        </h3>

        <div class="media-container-row pt-5 mt-2">
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress1" role="progressbar" data-goal="50">
                        <p class="pie_progress__number mbr-fonts-style display-5">85%</p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">Recruiter</h4>
                </div>
            </div>
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="60">
                        <p class="pie_progress__number mbr-fonts-style display-5">60%</p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">Recruiters</h4>
                </div>
            </div>
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress3" role="progressbar" data-goal="70">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div>
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Courses</h4>
                </div>
            </div>



        </div>
</div></section>-->

<section class="cid-qXzefyytyw" style="border-top: 2px solid #D95058;border-bottom: 2px solid #D95058;">

   <div class="container">
       <div class="container">
           <h3 class=" text-left font-weight-bold">Popular Courses</h3>

            <span style="font-size: 0.95rem;">Learn from our specially curated courses at a discounted price</span>

            <a href="javascript:void(0);" id="moreBtn2" class="float-right font-weight-bold" style="color:#D84F57">More</a>
       </div>

         <br/>

        <div class="row">

            <br/>
               <div id="popular-courses" class="container-fluid">

                <div class="owl-carousel ml-3">

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/4859/screenshots/4781041/illustration-develop-or.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Web Development course</h5>
                      </div>
                  </div>

                    <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/788099/screenshots/4575144/dron_robot_agent_kit8-net.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Artificial Intelligence Course</h5>
                      </div>
                  </div>

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/345970/screenshots/4741234/shot_1x.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Android Development Course</h5>
                      </div>
                  </div>

                  <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/241205/screenshots/3906737/python_1x.jpg" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Python programming course</h5>
                      </div>
                  </div>

                   <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/35381/screenshots/2608078/flex1_1x.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">Iot crash course</h5>
                      </div>
                  </div>

                   <div class="card" style="">
                      <img class="card-img-top" src="https://cdn.dribbble.com/users/257709/screenshots/3715270/pehia_rulon_50__1x.png" alt="Card image cap">
                      <div class="card-body" style="background-color: #fff;">
                        <h5 class="card-title text-center">UI/UX Course</h5>
                      </div>
                  </div>

               </div>
            </div>

       </div>
    </div>

</section>

 <section id="sponsor">
                <div class="owl-carousel owl-theme pt-3">
                    <div class="items"><a href="sponsor.html"><img src="{{ asset('assets/ExtraAssets/sponsor.jpg')}}" alt="Sponsor img"></a></div>
                    <div class="items"><a href="sponsor.html"><img src="{{ asset('assets/ExtraAssets/sponsor.jpg')}}" alt="Sponsor img"></a></div>
                    <div class="items"><a href="sponsor.html"><img src="{{asset('assets/ExtraAssets/sponsor.jpg')}}" alt="Sponsor img"></a></div>
                    <div class="items"><a href="sponsor.html"><img src="{{asset('assets/ExtraAssets/sponsor.jpg')}}" alt="Sponsor img"></a></div>
                </div>
</section>

<section id="company-list" class="pb-2" style="border-top: 2px solid #D95058;border-bottom: 2px solid #D95058;"> <!--Companies we list-->
                <div class="container">
                    <h3 class=" text-left font-weight-bold">Companies we list</h3>
                </div>
                <div class="owl-carousel">
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Anchor</h4>
                    </a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Bee
                            Drill</h4> </a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Double
                            T</h4> </a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Harvest</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Upload</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Lamp</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>LDC</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>LF</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Paramore</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Prosper</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Visco</h4></a></div>
                    <div class="items"><a href=""><img src="{{ asset('assets/ExtraAssets/company_placeholder_logo.png')}}" alt=""><h4>Yepjet</h4></a></div>
                </div>
</section>  <!--End of Companies we list-->


<section once="" class="cid-qYhiUkpSEY" id="footer7-13">
    <div class="container">
        <div class="media-container-row align-center">
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
                    © Copyright 2018 Hookon Internships
                </p>
            </div>
        </div>
    </div>
</section>

  @endsection
