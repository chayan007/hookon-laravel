<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{Storage::url(Auth::user()->photo_url)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br/>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Recruiter Corner</li>*--
        <!-- Optionally, you can add icons to the links -->
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'profile')==0)
        'active'
        @else
        ''
        @endif><a href="/recruiter/profile"><i class="fa fa-user"></i> <span>Home</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'edit')==0)
        'active'
        @else
        ''
        @endif><a href="/recruiter/edit"><i class="fa fa-ravelry"></i> <span>Edit Details</span></a></li>
        <li class="treeview">
          <a href="#" class=@if (strcasecmp(substr(strrchr(url()->current(),"/"),1),'postinternship')==0 || strcasecmp(substr(strrchr(url()->current(),"/"),1),'editinternship')==0)
        'active'
        @else
        ''
        @endif><i class="fa fa-link"></i> <span>Internships</span>
            <span class="pull-right-container">
                <i class="fa fa-sort-desc pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/recruiter/postinternship" class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'postinternsip')==0)
        'active'
        @else
        ''
        @endif>Post Internship</a></li>
            <li><a href="/recruiter/editinternship" class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'editinternship')==0)
        'active'
        @else
        ''
        @endif>Edit Internship</a></li>
          </ul>
        </li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'status')==0)
        'active'
        @else
        ''
        @endif><a href="/recruiter/status"><i class="fa fa-money"></i> <span>Internship Status</span></a></li>
        <li class="treeview">
          <a href="#" class=@if (strcasecmp(substr(strrchr(url()->current(),"/"),1),'postcourse')==0 || strcasecmp(substr(strrchr(url()->current(),"/"),1),'editcourse')==0)
        'active'
        @else
        ''
        @endif><i class="fa fa-ra"></i> <span>Courses</span>
            <span class="pull-right-container">
                <i class="fa fa-sort-desc pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/recruiter/postcourse" class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'postinternsip')==0)
        'active'
        @else
        ''
        @endif>Post Course</a></li>
            <li><a href="/recruiter/editcourse" class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'editinternship')==0)
        'active'
        @else
        ''
        @endif>Edit Course</a></li>
          </ul>
        </li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'support')==0)
        'active'
        @else
        ''
        @endif><a href="/recruiter/support"><i class="fa fa-envelope-open"></i> <span>Support</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
