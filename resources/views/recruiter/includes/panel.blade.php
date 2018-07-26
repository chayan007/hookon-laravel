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
        <li class="header">Students Corner</li>
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
