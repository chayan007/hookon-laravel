<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Recruiter Corner</li>*--
        <!-- Optionally, you can add icons to the links -->
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'profile')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/admin"><i class="fa fa-eercast"></i> <span>Home</span></a></li>
         <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'students')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/students"><i class="fa fa-users"></i> <span>Students</span></a></li>
         <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'recruiter')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/recruiters"><i class="fa fa-vcard-o"></i> <span>Recruiters</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'edit')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/edit"><i class="fa fa-ravelry"></i> <span>Edit Details</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'internships')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/internships"><i class="fa fa-link"></i> <span>Internships</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'istatus')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/istatus"><i class="fa fa-money"></i> <span>Internship Status</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'courses')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/courses"><i class="fa fa-ra"></i> <span>Courses</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'cstatus')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/cstatus"><i class="fa fa-money"></i> <span>Course Status</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'support')==0)
        'active'
        @else
        ''
        @endif><a href="/admin/support"><i class="fa fa-envelope-open"></i> <span>Support</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
