
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
          <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

          <li class="nav-item menu-open">
            <a href="{{route('admin.hero')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Hero
                
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('admin.service.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-uppercase">Service Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">

          <li class="nav-item mt-2 text-center">
              <form action="{{ route('logout') }}" class="d-inline-block" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline btn-primary">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
              </form>
          </li>
      </ul>
      </nav>
   
    </div>
    <!-- /.sidebar -->
  </aside>
