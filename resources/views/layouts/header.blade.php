<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class=" container-fluid navbar-header">
          <a href="/" class="navbar-brand pull-left"><img class="navbar-brand-img" src="{{asset('assets/ExtraAssets/hookon1.png')}}"/></a>
          <button style="padding:7px 12px;background-color:#D95058;" class="navbar-toggle collapsed mob-button pull-right" data-toggle="collapse" data-target="#navbar-collapse">
            <i style="color:#fff;" class="fa fa-bars"></i>
          </button>
          <div class="fullscreen-dropdown dropdown show pull-right" style="color:#fff; padding:9px 15px;">
            <a class="dropdown-toggle" style="color:#fff;" class="navbar-brand" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Recruiters</strong>
            </a>

            <div class="dropdown-menu mr-5" style="transform: translateX(-8%);" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/recruiter/register">Recruiter Register</a>
              <a class="dropdown-item" href="/recruiter/login">Recruiter Login</a>
              <a class="dropdown-item" href="/pricing">Recruiter Plans</a>
            </div>
          </div>

          <div class="fullscreen-dropdown dropdown show pull-right" style="padding:9px 15px;">
            <a class="dropdown-toggle" style="color:#fff;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Students</strong>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/student/register">Student Register</a>
              <a class="dropdown-item" href="/student/login">Student login</a>
            </div>
          </div>

          <div class="pull-right" style="padding:9px 15px;">
            <a class="" style="color:#fff;" href="/student/profile" >
              <strong>Dashboard</strong>
            </a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <div class="mobile-dropdown" style="color:#fff;">
            <a class="dropdown-toggle pull-right" style="color:#fff;" class="navbar-brand" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>Recruiters</strong>
            </a>

            <div class="dropdown-menu" style="transform: translateX(-8%);" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/recruiter/register">Recruiter Register</a>
              <a class="dropdown-item" href="/recruiter/login">Recruiter Login</a>
              <a class="dropdown-item" href="/pricing">Recruiter Plans</a>
            </div>
          </div>

          <div class="mobile-dropdown" >
            <a class="dropdown-toggle pull-left" style="color:#fff;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong>Students</strong>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/student/register">Student Register</a>
              <a class="dropdown-item" href="/student/login">Student login</a>
            </div>
          </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
