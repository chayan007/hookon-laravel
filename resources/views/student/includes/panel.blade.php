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
      <br/>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Students Corner</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'profile')==0)
        'active'
        @else
        ''
        @endif><a href="/student/profile"><i class="fa fa-user"></i> <span>Home</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'edit')==0)
        'active'
        @else
        ''
        @endif><a href="/student/edit"><i class="fa fa-ravelry"></i> <span>Edit Details</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'status')==0)
        'active'
        @else
        ''
        @endif><a href="/student/status"><i class="fa fa-money"></i> <span>Internship Status</span></a></li>
        <li class=@if ( strcasecmp(substr(strrchr(url()->current(),"/"),1),'support')==0)
        'active'
        @else
        ''
        @endif><a href="/student/support"><i class="fa fa-envelope-open"></i> <span>Support</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
